!(function (n) {
    "function" == typeof define && define.amd
      ? define(["jquery"], function (i) {
          n(i, window, document);
        })
      : "object" == typeof module && module.exports
      ? (module.exports = n(require("jquery"), window, document))
      : n(jQuery, window, document);
  })(function (n, i, t, e) {
    "use strict";
    var a = "countrySelect",
      s = 1,
      o = {
        defaultCountry: "",
        defaultStyling: "inside",
        excludeCountries: [],
        onlyCountries: [],
        preferredCountries: ["us", "gb"],
        localizedCountries: null,
        responsiveDropdown: 768 > n(i).width(),
      },
      r = {
        UP: 38,
        DOWN: 40,
        ENTER: 13,
        ESC: 27,
        BACKSPACE: 8,
        PLUS: 43,
        SPACE: 32,
        A: 65,
        Z: 90,
      },
      u = !1;
    function l(i, t) {
      (this.element = i),
        (this.options = n.extend({}, o, t)),
        (this._defaults = o),
        (this.ns = "." + a + s++),
        (this._name = a),
        this.init();
    }
    n(i).on("load", function () {
      u = !0;
    }),
      (l.prototype = {
        init: function () {
          return (
            this._processCountryData(),
            this._generateMarkup(),
            this._setInitialState(),
            this._initListeners(),
            (this.autoCountryDeferred = new n.Deferred()),
            this._initAutoCountry(),
            (this.typedLetters = ""),
            this.autoCountryDeferred
          );
        },
        _processCountryData: function () {
          this._setInstanceCountryData(),
            this._setPreferredCountries(),
            this.options.localizedCountries && this._translateCountriesByLocale(),
            (this.options.onlyCountries.length ||
              this.options.localizedCountries) &&
              this.countries.sort(this._countryNameSort);
        },
        _setInstanceCountryData: function () {
          var i = this;
          if (this.options.onlyCountries.length) {
            var t = [];
            n.each(this.options.onlyCountries, function (n, e) {
              var a = i._getCountryData(e, !0);
              a && t.push(a);
            }),
              (this.countries = t);
          } else if (this.options.excludeCountries.length) {
            var e = this.options.excludeCountries.map(function (n) {
              return n.toLowerCase();
            });
            this.countries = h.filter(function (n) {
              return -1 === e.indexOf(n.iso2);
            });
          } else this.countries = h;
        },
        _setPreferredCountries: function () {
          var i = this;
          (this.preferredCountries = []),
            n.each(this.options.preferredCountries, function (n, t) {
              var e = i._getCountryData(t, !1);
              e && i.preferredCountries.push(e);
            });
        },
        _translateCountriesByLocale() {
          for (let n = 0; n < this.countries.length; n++) {
            let i = this.countries[n].iso2.toLowerCase();
            this.options.localizedCountries.hasOwnProperty(i) &&
              (this.countries[n].name = this.options.localizedCountries[i]);
          }
        },
        _countryNameSort: (n, i) => n.name.localeCompare(i.name),
        _generateMarkup: function () {
          this.countryInput = n(this.element);
          var t = "country-select";
          this.options.defaultStyling && (t += " " + this.options.defaultStyling),
            this.countryInput.wrap(n("<div>", { class: t }));
          var e = n("<div>", { class: "flag-dropdown" }).insertAfter(
              this.countryInput
            ),
            a = n("<div>", { class: "selected-flag" }).appendTo(e);
          (this.selectedFlagInner = n("<div>", { class: "flag" }).appendTo(a)),
            n("<div>", { class: "arrow" }).appendTo(a),
            (this.countryList = n("<ul>", {
              class: "country-list v-hide",
            }).appendTo(e)),
            this.preferredCountries.length &&
              (this._appendListItems(this.preferredCountries, "preferred"),
              n("<li>", { class: "divider" }).appendTo(this.countryList)),
            this._appendListItems(this.countries, ""),
            (this.countryCodeInput = n(
              "#" + this.countryInput.attr("id") + "_code"
            )),
            this.countryCodeInput ||
              ((this.countryCodeInput = n(
                '<input type="hidden" id="' +
                  this.countryInput.attr("id") +
                  '_code" name="' +
                  this.countryInput.attr("name") +
                  '_code" value="" />'
              )),
              this.countryCodeInput.insertAfter(this.countryInput)),
            (this.dropdownHeight = this.countryList.outerHeight()),
            this.options.responsiveDropdown &&
              n(i)
                .resize(function () {
                  n(".country-select").each(function () {
                    var i = this.offsetWidth;
                    n(this)
                      .find(".country-list")
                      .css("width", i + "px");
                  });
                })
                .resize(),
            this.countryList.removeClass("v-hide").addClass("hide"),
            (this.countryListItems = this.countryList.children(".country"));
        },
        _appendListItems: function (i, t) {
          var e = "";
          n.each(i, function (n, i) {
            (e +=
              '<li class="country ' +
              t +
              '" data-country-code="' +
              i.iso2 +
              '">'),
              (e += '<div class="flag ' + i.iso2 + '"></div>'),
              (e += '<span class="country-name">' + i.name + "</span>"),
              (e += "</li>");
          }),
            this.countryList.append(e);
        },
        _setInitialState: function () {
          var n,
            i = !1;
          this.countryInput.val() && (i = this._updateFlagFromInputVal());
          var t = this.countryCodeInput.val();
          t && this.selectCountry(t),
            i ||
              ((this.options.defaultCountry &&
                (n = this._getCountryData(this.options.defaultCountry, !1))) ||
                (n = this.preferredCountries.length
                  ? this.preferredCountries[0]
                  : this.countries[0]),
              (this.defaultCountry = n.iso2));
        },
        _initListeners: function () {
          var n = this;
          this.countryInput.on("keyup" + this.ns, function () {
            n._updateFlagFromInputVal();
          }),
            this.selectedFlagInner.parent().on("click" + this.ns, function (i) {
              n.countryList.hasClass("hide") &&
                !n.countryInput.prop("disabled") &&
                n._showDropdown();
            }),
            this.countryInput.on("blur" + this.ns, function () {
              n.countryInput.val() != n.getSelectedCountryData().name &&
                n.setCountry(n.countryInput.val()),
                n.countryInput.val(n.getSelectedCountryData().name);
            });
        },
        _initAutoCountry: function () {
          "auto" === this.options.initialCountry
            ? this._loadAutoCountry()
            : (this.defaultCountry && this.selectCountry(this.defaultCountry),
              this.autoCountryDeferred.resolve());
        },
        _loadAutoCountry: function () {
          n.fn[a].autoCountry
            ? this.handleAutoCountry()
            : n.fn[a].startedLoadingAutoCountry ||
              ((n.fn[a].startedLoadingAutoCountry = !0),
              "function" == typeof this.options.geoIpLookup &&
                this.options.geoIpLookup(function (i) {
                  (n.fn[a].autoCountry = i.toLowerCase()),
                    setTimeout(function () {
                      n(".country-select input").countrySelect(
                        "handleAutoCountry"
                      );
                    });
                }));
        },
        _focus: function () {
          this.countryInput.focus();
          var n = this.countryInput[0];
          if (n.setSelectionRange) {
            var i = this.countryInput.val().length;
            n.setSelectionRange(i, i);
          }
        },
        _showDropdown: function () {
          this._setDropdownPosition();
          var n = this.countryList.children(".active");
          this._highlightListItem(n),
            this.countryList.removeClass("hide"),
            this._scrollTo(n),
            this._bindDropdownListeners(),
            this.selectedFlagInner.parent().children(".arrow").addClass("up");
        },
        _setDropdownPosition: function () {
          var t = this.countryInput.offset().top,
            e = n(i).scrollTop(),
            a =
              t + this.countryInput.outerHeight() + this.dropdownHeight <
              e + n(i).height(),
            s = t - this.dropdownHeight > e,
            o = !a && s ? "-" + (this.dropdownHeight - 1) + "px" : "";
          this.countryList.css("top", o);
        },
        _bindDropdownListeners: function () {
          var i = this;
          this.countryList.on("mouseover" + this.ns, ".country", function (t) {
            i._highlightListItem(n(this));
          }),
            this.countryList.on("click" + this.ns, ".country", function (t) {
              i._selectListItem(n(this));
            });
          var e = !0;
          n("html").on("click" + this.ns, function (n) {
            n.preventDefault(), e || i._closeDropdown(), (e = !1);
          }),
            n(t).on("keydown" + this.ns, function (n) {
              n.preventDefault(),
                n.which == r.UP || n.which == r.DOWN
                  ? i._handleUpDownKey(n.which)
                  : n.which == r.ENTER
                  ? i._handleEnterKey()
                  : n.which == r.ESC
                  ? i._closeDropdown()
                  : (n.which >= r.A && n.which <= r.Z) || n.which === r.SPACE
                  ? ((i.typedLetters += String.fromCharCode(n.which)),
                    i._filterCountries(i.typedLetters))
                  : n.which === r.BACKSPACE &&
                    ((i.typedLetters = i.typedLetters.slice(0, -1)),
                    i._filterCountries(i.typedLetters));
            });
        },
        _handleUpDownKey: function (n) {
          var i = this.countryList.children(".highlight").first(),
            t = n == r.UP ? i.prev() : i.next();
          t.length &&
            (t.hasClass("divider") && (t = n == r.UP ? t.prev() : t.next()),
            this._highlightListItem(t),
            this._scrollTo(t));
        },
        _handleEnterKey: function () {
          var n = this.countryList.children(".highlight").first();
          n.length && this._selectListItem(n);
        },
        _filterCountries: function (i) {
          var t = this.countryListItems.filter(function () {
            return (
              0 === n(this).text().toUpperCase().indexOf(i) &&
              !n(this).hasClass("preferred")
            );
          });
          if (t.length) {
            var e,
              a = t.filter(".highlight").first();
            (e =
              a && a.next() && 0 === a.next().text().toUpperCase().indexOf(i)
                ? a.next()
                : t.first()),
              this._highlightListItem(e),
              this._scrollTo(e);
          }
        },
        _updateFlagFromInputVal: function () {
          var i = this,
            t = this.countryInput.val().replace(/(?=[() ])/g, "\\");
          if (t) {
            var e = [],
              a = RegExp(t, "i");
            if (t.length <= 2)
              for (var s = 0; s < this.countries.length; s++)
                this.countries[s].iso2.match(a) && e.push(this.countries[s].iso2);
            if (0 == e.length)
              for (var s = 0; s < this.countries.length; s++)
                this.countries[s].name.match(a) && e.push(this.countries[s].iso2);
            var o = !1;
            return (
              n.each(e, function (n, t) {
                i.selectedFlagInner.hasClass(t) && (o = !0);
              }),
              o ||
                (this._selectFlag(e[0]),
                this.countryCodeInput.val(e[0]).trigger("change")),
              !0
            );
          }
          return !1;
        },
        _highlightListItem: function (n) {
          this.countryListItems.removeClass("highlight"), n.addClass("highlight");
        },
        _getCountryData: function (n, i) {
          for (var t = i ? h : this.countries, e = 0; e < t.length; e++)
            if (t[e].iso2 == n) return t[e];
          return null;
        },
        _selectFlag: function (n) {
          if (!n) return !1;
          this.selectedFlagInner.attr("class", "flag " + n);
          var i = this._getCountryData(n);
          this.selectedFlagInner.parent().attr("title", i.name);
          var t = this.countryListItems
            .children(".flag." + n)
            .first()
            .parent();
          this.countryListItems.removeClass("active"), t.addClass("active");
        },
        _selectListItem: function (n) {
          var i = n.attr("data-country-code");
          this._selectFlag(i),
            this._closeDropdown(),
            this._updateName(i),
            this.countryInput.trigger("change"),
            this.countryCodeInput.trigger("change"),
            this._focus();
        },
        _closeDropdown: function () {
          this.countryList.addClass("hide"),
            this.selectedFlagInner.parent().children(".arrow").removeClass("up"),
            n(t).off("keydown" + this.ns),
            n("html").off("click" + this.ns),
            this.countryList.off(this.ns),
            (this.typedLetters = "");
        },
        _scrollTo: function (n) {
          if (n && n.offset()) {
            var i = this.countryList,
              t = i.height(),
              e = i.offset().top,
              a = n.outerHeight(),
              s = n.offset().top,
              o = s - e + i.scrollTop();
            s < e ? i.scrollTop(o) : s + a > e + t && i.scrollTop(o - (t - a));
          }
        },
        _updateName: function (n) {
          this.countryCodeInput.val(n).trigger("change"),
            this.countryInput.val(this._getCountryData(n).name);
        },
        handleAutoCountry: function () {
          "auto" === this.options.initialCountry &&
            ((this.defaultCountry = n.fn[a].autoCountry),
            this.countryInput.val() || this.selectCountry(this.defaultCountry),
            this.autoCountryDeferred.resolve());
        },
        getSelectedCountryData: function () {
          var n = this.selectedFlagInner.attr("class").split(" ")[1];
          return this._getCountryData(n);
        },
        selectCountry: function (n) {
          (n = n.toLowerCase()),
            this.selectedFlagInner.hasClass(n) ||
              (this._selectFlag(n), this._updateName(n));
        },
        setCountry: function (n) {
          this.countryInput.val(n), this._updateFlagFromInputVal();
        },
        destroy: function () {
          this.countryInput.off(this.ns),
            this.selectedFlagInner.parent().off(this.ns),
            this.countryInput.parent().before(this.countryInput).remove();
        },
      }),
      (n.fn[a] = function (i) {
        var t,
          s = arguments;
        return i === e || "object" == typeof i
          ? this.each(function () {
              n.data(this, "plugin_" + a) ||
                n.data(this, "plugin_" + a, new l(this, i));
            })
          : "string" == typeof i && "_" !== i[0] && "init" !== i
          ? (this.each(function () {
              var e = n.data(this, "plugin_" + a);
              e instanceof l &&
                "function" == typeof e[i] &&
                (t = e[i].apply(e, Array.prototype.slice.call(s, 1))),
                "destroy" === i && n.data(this, "plugin_" + a, null);
            }),
            t !== e ? t : this)
          : void 0;
      }),
      (n.fn[a].getCountryData = function () {
        return h;
      }),
      (n.fn[a].setCountryData = function (n) {
        h = n;
      });
    var h = n.each(
      [
        { n: "Afghanistan (‫افغانستان‬‎)", i: "af" },
        { n: "\xc5land Islands (\xc5land)", i: "ax" },
        { n: "Albania (Shqip\xebri)", i: "al" },
        { n: "Algeria (‫الجزائر‬‎)", i: "dz" },
        { n: "American Samoa", i: "as" },
        { n: "Andorra", i: "ad" },
        { n: "Angola", i: "ao" },
        { n: "Anguilla", i: "ai" },
        { n: "Antarctica", i: "aq" },
        { n: "Antigua and Barbuda", i: "ag" },
        { n: "Argentina", i: "ar" },
        { n: "Armenia (Հայաստան)", i: "am" },
        { n: "Aruba", i: "aw" },
        { n: "Australia", i: "au" },
        { n: "Austria (\xd6sterreich)", i: "at" },
        { n: "Azerbaijan (Azərbaycan)", i: "az" },
        { n: "Bahamas", i: "bs" },
        { n: "Bahrain (‫البحرين‬‎)", i: "bh" },
        { n: "Bangladesh (বাংলাদেশ)", i: "bd" },
        { n: "Barbados", i: "bb" },
        { n: "Belarus (Беларусь)", i: "by" },
        { n: "Belgium (Belgi\xeb)", i: "be" },
        { n: "Belize", i: "bz" },
        { n: "Benin (B\xe9nin)", i: "bj" },
        { n: "Bermuda", i: "bm" },
        { n: "Bhutan (འབྲུག)", i: "bt" },
        { n: "Bolivia", i: "bo" },
        { n: "Bosnia and Herzegovina (Босна и Херцеговина)", i: "ba" },
        { n: "Botswana", i: "bw" },
        { n: "Bouvet Island (Bouvet\xf8ya)", i: "bv" },
        { n: "Brazil (Brasil)", i: "br" },
        { n: "British Indian Ocean Territory", i: "io" },
        { n: "British Virgin Islands", i: "vg" },
        { n: "Brunei", i: "bn" },
        { n: "Bulgaria (България)", i: "bg" },
        { n: "Burkina Faso", i: "bf" },
        { n: "Burundi (Uburundi)", i: "bi" },
        { n: "Cambodia (កម្ពុជា)", i: "kh" },
        { n: "Cameroon (Cameroun)", i: "cm" },
        { n: "Canada", i: "ca" },
        { n: "Cape Verde (Kabu Verdi)", i: "cv" },
        { n: "Caribbean Netherlands", i: "bq" },
        { n: "Cayman Islands", i: "ky" },
        { n: "Central African Republic (R\xe9publique Centrafricaine)", i: "cf" },
        { n: "Chad (Tchad)", i: "td" },
        { n: "Chile", i: "cl" },
        { n: "China (中国)", i: "cn" },
        { n: "Christmas Island", i: "cx" },
        { n: "Cocos (Keeling) Islands (Kepulauan Cocos (Keeling))", i: "cc" },
        { n: "Colombia", i: "co" },
        { n: "Comoros (‫جزر القمر‬‎)", i: "km" },
        { n: "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", i: "cd" },
        { n: "Congo (Republic) (Congo-Brazzaville)", i: "cg" },
        { n: "Cook Islands", i: "ck" },
        { n: "Costa Rica", i: "cr" },
        { n: "C\xf4te d’Ivoire", i: "ci" },
        { n: "Croatia (Hrvatska)", i: "hr" },
        { n: "Cuba", i: "cu" },
        { n: "Cura\xe7ao", i: "cw" },
        { n: "Cyprus (Κύπρος)", i: "cy" },
        { n: "Czech Republic (Česk\xe1 republika)", i: "cz" },
        { n: "Denmark (Danmark)", i: "dk" },
        { n: "Djibouti", i: "dj" },
        { n: "Dominica", i: "dm" },
        { n: "Dominican Republic (Rep\xfablica Dominicana)", i: "do" },
        { n: "Ecuador", i: "ec" },
        { n: "Egypt (‫مصر‬‎)", i: "eg" },
        { n: "El Salvador", i: "sv" },
        { n: "Equatorial Guinea (Guinea Ecuatorial)", i: "gq" },
        { n: "Eritrea", i: "er" },
        { n: "Estonia (Eesti)", i: "ee" },
        { n: "Ethiopia", i: "et" },
        { n: "Falkland Islands (Islas Malvinas)", i: "fk" },
        { n: "Faroe Islands (F\xf8royar)", i: "fo" },
        { n: "Fiji", i: "fj" },
        { n: "Finland (Suomi)", i: "fi" },
        { n: "France", i: "fr" },
        { n: "French Guiana (Guyane fran\xe7aise)", i: "gf" },
        { n: "French Polynesia (Polyn\xe9sie fran\xe7aise)", i: "pf" },
        {
          n: "French Southern Territories (Terres australes fran\xe7aises)",
          i: "tf",
        },
        { n: "Gabon", i: "ga" },
        { n: "Gambia", i: "gm" },
        { n: "Georgia (საქართველო)", i: "ge" },
        { n: "Germany (Deutschland)", i: "de" },
        { n: "Ghana (Gaana)", i: "gh" },
        { n: "Gibraltar", i: "gi" },
        { n: "Greece (Ελλάδα)", i: "gr" },
        { n: "Greenland (Kalaallit Nunaat)", i: "gl" },
        { n: "Grenada", i: "gd" },
        { n: "Guadeloupe", i: "gp" },
        { n: "Guam", i: "gu" },
        { n: "Guatemala", i: "gt" },
        { n: "Guernsey", i: "gg" },
        { n: "Guinea (Guin\xe9e)", i: "gn" },
        { n: "Guinea-Bissau (Guin\xe9 Bissau)", i: "gw" },
        { n: "Guyana", i: "gy" },
        { n: "Haiti", i: "ht" },
        { n: "Heard Island and Mcdonald Islands", i: "hm" },
        { n: "Honduras", i: "hn" },
        { n: "Hong Kong (香港)", i: "hk" },
        { n: "Hungary (Magyarorsz\xe1g)", i: "hu" },
        { n: "Iceland (\xcdsland)", i: "is" },
        { n: "India (भारत)", i: "in" },
        { n: "Indonesia", i: "id" },
        { n: "Iran (‫ایران‬‎)", i: "ir" },
        { n: "Iraq (‫العراق‬‎)", i: "iq" },
        { n: "Ireland", i: "ie" },
        { n: "Isle of Man", i: "im" },
        { n: "Israel (‫ישראל‬‎)", i: "il" },
        { n: "Italy (Italia)", i: "it" },
        { n: "Jamaica", i: "jm" },
        { n: "Japan (日本)", i: "jp" },
        { n: "Jersey", i: "je" },
        { n: "Jordan (‫الأردن‬‎)", i: "jo" },
        { n: "Kazakhstan (Казахстан)", i: "kz" },
        { n: "Kenya", i: "ke" },
        { n: "Kiribati", i: "ki" },
        { n: "Kosovo (Kosov\xeb)", i: "xk" },
        { n: "Kuwait (‫الكويت‬‎)", i: "kw" },
        { n: "Kyrgyzstan (Кыргызстан)", i: "kg" },
        { n: "Laos (ລາວ)", i: "la" },
        { n: "Latvia (Latvija)", i: "lv" },
        { n: "Lebanon (‫لبنان‬‎)", i: "lb" },
        { n: "Lesotho", i: "ls" },
        { n: "Liberia", i: "lr" },
        { n: "Libya (‫ليبيا‬‎)", i: "ly" },
        { n: "Liechtenstein", i: "li" },
        { n: "Lithuania (Lietuva)", i: "lt" },
        { n: "Luxembourg", i: "lu" },
        { n: "Macau (澳門)", i: "mo" },
        { n: "Macedonia (FYROM) (Македонија)", i: "mk" },
        { n: "Madagascar (Madagasikara)", i: "mg" },
        { n: "Malawi", i: "mw" },
        { n: "Malaysia", i: "my" },
        { n: "Maldives", i: "mv" },
        { n: "Mali", i: "ml" },
        { n: "Malta", i: "mt" },
        { n: "Marshall Islands", i: "mh" },
        { n: "Martinique", i: "mq" },
        { n: "Mauritania (‫موريتانيا‬‎)", i: "mr" },
        { n: "Mauritius (Moris)", i: "mu" },
        { n: "Mayotte", i: "yt" },
        { n: "Mexico (M\xe9xico)", i: "mx" },
        { n: "Micronesia", i: "fm" },
        { n: "Moldova (Republica Moldova)", i: "md" },
        { n: "Monaco", i: "mc" },
        { n: "Mongolia (Монгол)", i: "mn" },
        { n: "Montenegro (Crna Gora)", i: "me" },
        { n: "Montserrat", i: "ms" },
        { n: "Morocco (‫المغرب‬‎)", i: "ma" },
        { n: "Mozambique (Mo\xe7ambique)", i: "mz" },
        { n: "Myanmar (Burma) (မြန်မာ)", i: "mm" },
        { n: "Namibia (Namibi\xeb)", i: "na" },
        { n: "Nauru", i: "nr" },
        { n: "Nepal (नेपाल)", i: "np" },
        { n: "Netherlands (Nederland)", i: "nl" },
        { n: "New Caledonia (Nouvelle-Cal\xe9donie)", i: "nc" },
        { n: "New Zealand", i: "nz" },
        { n: "Nicaragua", i: "ni" },
        { n: "Niger (Nijar)", i: "ne" },
        { n: "Nigeria", i: "ng" },
        { n: "Niue", i: "nu" },
        { n: "Norfolk Island", i: "nf" },
        { n: "North Korea (조선 민주주의 인민 공화국)", i: "kp" },
        { n: "Northern Mariana Islands", i: "mp" },
        { n: "Norway (Norge)", i: "no" },
        { n: "Oman (‫عُمان‬‎)", i: "om" },
        { n: "Pakistan (‫پاکستان‬‎)", i: "pk" },
        { n: "Palau", i: "pw" },
        { n: "Palestine (‫فلسطين‬‎)", i: "ps" },
        { n: "Panama (Panam\xe1)", i: "pa" },
        { n: "Papua New Guinea", i: "pg" },
        { n: "Paraguay", i: "py" },
        { n: "Peru (Per\xfa)", i: "pe" },
        { n: "Philippines", i: "ph" },
        { n: "Pitcairn Islands", i: "pn" },
        { n: "Poland (Polska)", i: "pl" },
        { n: "Portugal", i: "pt" },
        { n: "Puerto Rico", i: "pr" },
        { n: "Qatar (‫قطر‬‎)", i: "qa" },
        { n: "R\xe9union (La R\xe9union)", i: "re" },
        { n: "Romania (Rom\xe2nia)", i: "ro" },
        { n: "Russia (Россия)", i: "ru" },
        { n: "Rwanda", i: "rw" },
        { n: "Saint Barth\xe9lemy (Saint-Barth\xe9lemy)", i: "bl" },
        { n: "Saint Helena", i: "sh" },
        { n: "Saint Kitts and Nevis", i: "kn" },
        { n: "Saint Lucia", i: "lc" },
        { n: "Saint Martin (Saint-Martin (partie fran\xe7aise))", i: "mf" },
        { n: "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", i: "pm" },
        { n: "Saint Vincent and the Grenadines", i: "vc" },
        { n: "Samoa", i: "ws" },
        { n: "San Marino", i: "sm" },
        {
          n: "S\xe3o Tom\xe9 and Pr\xedncipe (S\xe3o Tom\xe9 e Pr\xedncipe)",
          i: "st",
        },
        { n: "Saudi Arabia (‫المملكة العربية السعودية‬‎)", i: "sa" },
        { n: "Senegal (S\xe9n\xe9gal)", i: "sn" },
        { n: "Serbia (Србија)", i: "rs" },
        { n: "Seychelles", i: "sc" },
        { n: "Sierra Leone", i: "sl" },
        { n: "Singapore", i: "sg" },
        { n: "Sint Maarten", i: "sx" },
        { n: "Slovakia (Slovensko)", i: "sk" },
        { n: "Slovenia (Slovenija)", i: "si" },
        { n: "Solomon Islands", i: "sb" },
        { n: "Somalia (Soomaaliya)", i: "so" },
        { n: "South Africa", i: "za" },
        { n: "South Georgia & South Sandwich Islands", i: "gs" },
        { n: "South Korea (대한민국)", i: "kr" },
        { n: "South Sudan (‫جنوب السودان‬‎)", i: "ss" },
        { n: "Spain (Espa\xf1a)", i: "es" },
        { n: "Sri Lanka (ශ්‍රී ලංකාව)", i: "lk" },
        { n: "Sudan (‫السودان‬‎)", i: "sd" },
        { n: "Suriname", i: "sr" },
        { n: "Svalbard and Jan Mayen (Svalbard og Jan Mayen)", i: "sj" },
        { n: "Swaziland", i: "sz" },
        { n: "Sweden (Sverige)", i: "se" },
        { n: "Switzerland (Schweiz)", i: "ch" },
        { n: "Syria (‫سوريا‬‎)", i: "sy" },
        { n: "Taiwan (台灣)", i: "tw" },
        { n: "Tajikistan", i: "tj" },
        { n: "Tanzania", i: "tz" },
        { n: "Thailand (ไทย)", i: "th" },
        { n: "Timor-Leste", i: "tl" },
        { n: "Togo", i: "tg" },
        { n: "Tokelau", i: "tk" },
        { n: "Tonga", i: "to" },
        { n: "Trinidad and Tobago", i: "tt" },
        { n: "Tunisia (‫تونس‬‎)", i: "tn" },
        { n: "Turkey (T\xfcrkiye)", i: "tr" },
        { n: "Turkmenistan", i: "tm" },
        { n: "Turks and Caicos Islands", i: "tc" },
        { n: "Tuvalu", i: "tv" },
        { n: "Uganda", i: "ug" },
        { n: "Ukraine (Україна)", i: "ua" },
        { n: "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", i: "ae" },
        { n: "United Kingdom", i: "gb" },
        { n: "United States", i: "us" },
        { n: "U.S. Minor Outlying Islands", i: "um" },
        { n: "U.S. Virgin Islands", i: "vi" },
        { n: "Uruguay", i: "uy" },
        { n: "Uzbekistan (Oʻzbekiston)", i: "uz" },
        { n: "Vanuatu", i: "vu" },
        { n: "Vatican City (Citt\xe0 del Vaticano)", i: "va" },
        { n: "Venezuela", i: "ve" },
        { n: "Vietnam (Việt Nam)", i: "vn" },
        { n: "Wallis and Futuna", i: "wf" },
        { n: "Western Sahara (‫الصحراء الغربية‬‎)", i: "eh" },
        { n: "Yemen (‫اليمن‬‎)", i: "ye" },
        { n: "Zambia", i: "zm" },
        { n: "Zimbabwe", i: "zw" },
      ],
      function (n, i) {
        (i.name = i.n), (i.iso2 = i.i), delete i.n, delete i.i;
      }
    );
  });
  
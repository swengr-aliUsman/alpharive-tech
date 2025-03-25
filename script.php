<script>
$("#country_selector").countrySelect({
	defaultCountry: "us",
	// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
	responsiveDropdown: true,
	//preferredCountries: ['ca', 'gb', 'us']
});
</script>


<script>
  $(document).ready(function () {
    $('#form-help').submit(function () {
      $('#response').html("<b>Loading response...</b>");
      $.ajax({
        type: 'POST',
        url: '/submitcontact/',
        data: $(this).serialize(),
      })
        .done(function (data) {
            console.log('Data',data);
          $('#response').html(data);
          $("#form-help")[0].reset();
          window.location.href = 'https://www.opris.exchange/success/';
        })
        .fail(function () { 
          alert("Posting failed.");
        });
      return false;
    });
  });
</script>
       
     <script>   
    $('#social_select li').click(function(){
      var contact_type = $(this).attr('data-value');
      $(".contact_type").val(contact_type); 
      if(contact_type == 'skype')
      {
          $(".social_contact").attr('placeholder','Your '+contact_type + ' ID'); 
      } else {
          $(".social_contact").attr('placeholder','Your '+contact_type + ' Number');
      }
    });

    $("ul.social-select").on("click", ".init", function() {
       $(this).closest("ul").children('li:not(.init)').toggle();
    });
    
    $(document).on("click", function(event){
        var $trigger = $("ul.social-select");
        if($trigger !== event.target && !$trigger.has(event.target).length){
            $(".init").closest("ul").children('li:not(.init)').slideUp("fast");
        }            
    });

    var allOptions = $("ul.social-select").children('li:not(.init)');
    $("ul.social-select").on("click", "li:not(.init)", function() {
        allOptions.removeClass('selected');
        $(this).addClass('selected');
        $("ul.social-select").children('.init').html($(this).html());
        var thisattr = $(this).attr('data-value');
        $("ul.social-select").children('.init').attr('data-value',thisattr);
        allOptions.toggle();
    });
        
</script>
<script>
    window.onload = function () {
        setTimeout(function () {
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script");
                s1.async = true;
                s1.src = 'https://embed.tawk.to/634cea41daff0e1306d25507/1gfi765ld';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                document.body.appendChild(s1);
            })();
        }, 3000); // 3 seconds delay
    };
</script>


<!--End of Tawk.to Script-->

<!-- Default Statcounter code for Crypto Exchange Development
https://www.opris.exchange/ -->
<script type="text/javascript">
var sc_project=12817558; 
var sc_invisible=1; 
var sc_security="d132ef84"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js" async></script>
<noscript><div class="statcounter"><a title="Web Analytics"
href="https://statcounter.com/" target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12817558/0/d132ef84/1/" alt="Web Analytics"
referrerPolicy="no-referrer-when-downgrade"></a></div></noscript>
<!-- End of Statcounter Code -->
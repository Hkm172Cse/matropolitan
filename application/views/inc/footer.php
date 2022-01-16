

<footer class="footerCSS">
  Developed by <a href="http://facebook.com/SurajitSinghaSisir">Surajiit Singha Sisir</a>
  <p class="footerCSScopyright">&copy; 2021 Metropolitan University
  </p>

</footer>



<!--ALL SCRIPTS-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?= base_url('assets/scripts/script1.js')?>"></script>
<script src="<?= base_url('assets/scripts/imageZoom.js')?>"></script>

<!-- ssssss -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"
    integrity="sha512-Y+0b10RbVUTf3Mi0EgJue0FoheNzentTMMIE2OreNbqnUPNbQj8zmjK3fs5D2WhQeGWIem2G2UkKjAL/bJ/UXQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>





<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!-- add requisition-->
<script>
    $(function() {
    $('#toggle-event').change(function() {
      $('#console-event').html('Toggle: ' + $(this).prop('checked'))
    })
  })

function rounder(num) {    
    return +(Math.round(num + "e+2")  + "e-2");
}

for(let i=1; i<100; i++){
  $("#myInput"+i).on("change", function(){
     //var X = document.getElementById("myInput2").value;
     let X      = parseInt($(this).val())
     let pa     = parseInt($("#pa"+i).val());
     let stock  = parseInt($("#stock"+i).val());
     $("#stock"+i).val(parseInt(X+stock));
     $("#pak"+i).val(rounder(X/pa) + " S/C")
  })
}  
</script>

<!--add requistion-->

<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script>
    //Date Time Picker
    $(document).ready(function () {
        var date_input = $('input[name="date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
    
    $(function() {
    $('#toggle-event').change(function() {
      $('#console-event').html('Toggle: ' + $(this).prop('checked'))
    })
  })
  
</script>

</html>
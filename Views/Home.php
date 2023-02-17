<?php include 'header/header.php' ?>

<?= $contenu ?>


       <?php include 'header/footer.php' ?>


        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="<?= URLROOT ?>assets/js/jquery.min.js"></script>
    <!-- JQUERY MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/wow/wow.min.js"></script>
    <!-- WOW JS -->
    <script src="<?= URLROOT ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- BOOTSTRAP MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <!-- BOOTSTRAP SELECT MIN JS -->
    <script src="<?= URLROOT ?>assets/vendor/counter/waypoints-min.js"></script>
    <!-- WAYPOINTS JS -->
    <script src="<?= URLROOT ?>assets/vendor/counter/counterup.min.js"></script>
    <!-- COUNTERUP JS -->
    <script src="<?= URLROOT ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- SWIPER JS -->
    <script src="<?= URLROOT ?>assets/js/dz.carousel.js"></script>
    <!-- DZ CAROUSEL JS -->
    <script src="<?= URLROOT ?>assets/js/dz.ajax.js"></script>
    <!-- AJAX -->
    <script src="<?= URLROOT ?>assets/js/custom.js"></script>

    <script src="<?= URLROOT ?>assets/vendor/jquery.dataTables.min.js"></script>


    
    <!-- CUSTOM JS -->




    <script> 

    function send(string){

      $.ajax({
        url: '<?= URLROOT ?>main/readpermition',
        type: 'POST',
        data: {slug: string},
        dataType:'json',
        success:(data)=>{
          if(data.error){
            $('#error-send').html(`<span class='text-danger'>${data.message}</span>`)
          }else if(data.url){
            window.location= data.url;
          }
        }

      })
   
    }



    //Form authetification

       $(document).ready(()=>{

        $('#myTable').DataTable();


        $('#formAuthentication').on('submit', (e)=>{
              e.preventDefault();
            
              var email=$('#email').val();
              var pass= $('#password').val();

             let url_send=$('#formAuthentication').data('url');
             $('#btn-connect').add(Attr, 'disabled')
             $('#btn-connect').text('loading please...')
              $.ajax({
                  url :url_send,
                  type: 'POST',
                  data : {email:email, pass:pass},
                  dataType:'JSON'
                })
                .done(function(response){ 
                  $('#btn-connect').removeAttr('disabled')
                  $('#btn-connect').text('Se connecter')

                      if(response.error){
                        $('#result-login').html(`<div class="alert alert-danger alert-dismissible" role="alert">
                        `+response.message+`
                        
                      </div>`)
                      
                      }else{
                        window.location=response.url;
                      }
                  });

            
             });
         

       })
    </script>








<script> 
//Form add  
       $(document).ready(()=>{
        $('#form-submit').on('submit', (e)=>{
           e.preventDefault();
          let  form= e.target;

          $.ajax({
              url:$('#form-submit').data('url'),
              type:'POST',
              enctype: 'multipart/form-data',
		          data:new FormData(form),
		          processData: false,
		          contentType: false,
		         cache: false,
		         timeout: 600000,
             dataType:'json',
             beforeSend:function(){
                  $('#btn-save').text($('#btn-save').data('before'))
             },success:function(response){
              $('#btn-save').text($('#btn-save').data('text'))
              if(response.error){
                $('#result').html('<strong class="text-danger text-center">'+response.message+'</strong>')
              }else if(response.url){
                window.location=response.url;
              }
              else{
                $('#form-submit')[0].reset();
                $('#result').html('<strong class="text-success text-center">'+response.message+'</div> ')
              }
              
             }
            
          })



        })
         

       })
    </script>

</body>

</html>
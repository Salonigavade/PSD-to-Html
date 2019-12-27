<?php
$page='contact';
include('header2.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
</head>
<script type="text/javascript" src="lightbox\lightbox-plus-jquery.min.js"></script>
<body>

<div class="container">
	<div class="content">
			<div class="row"> 
				<div class="col-md-6 col-sm-12 col-xs-12">
             <div class="">
               <p>Plese write your enquiry below..</p>
             </div>
             <form class="form-horizontal">
               
              <div class="form-group">
                    <label class="control-label col-sm-12 col-xs-12 col-md-2" for="uname">Name:</label>
                    <div class="col-sm-2 col-md-2"></div>
                    <div class="col-sm-8 col-md-8">
                      <input type="email" class="form-control ip-size" id="uname"  name="uname" required="true">
                    </div>
                  </div>

                <div class="form-group">
                    <label class="control-label col-sm-12 col-md-2 col-xs-12" for="email">Email:</label>
                     <div class="col-sm-2 col-md-2"></div>
                    <div class="col-sm-8 col-md-8">
                      <input type="email" class="form-control ip-size" id="email"  name="email"  required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-12 col-md-2 col-xs-12" for="pwd">Phone Number:</label>
                    <div class="col-sm-2 col-md-2"></div>
                    <div class="col-sm-8 col-md-8">          
                      <input type="number" class="form-control ip-size" id="pwd"  name="pwd"  required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-12 col-md-2 col-xs-12" for="sub">Subject:</label>
                     <div class="col-sm-2 col-md-2"></div>
                    <div class="col-sm-8 col-md-8">         
                      <input type="text" class="form-control ip-size" id="sub"  name="sub"  required="true">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-12 col-md-2 col-xs-12" for="enquiry">Enquiry:</label>
                    <div class="col-sm-12 col-md-2"></div>
                    <div class="col-sm-12 col-md-8 col-xs-12">        
                      <textarea type="text" id="enquiry" name="enquiry" cols="50" required="true"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-sm-6 col-md-6 col-xs-6" for="que">
                      <span  style="margin: 23px;">How many eyes has a typical person?</span><br>
                      <input type="text" class="form-control ip-size2" id="que"  name="que"  required="true">
                    </label>
                  </div>

                  <div class="form-group">        
                    <div class="col-sm-offset-4 col-sm-8 col-md-offset-4 col-md-8">
                      <button type="submit" class="input-size3"></button>
                    </div>
                  </div>   
					 </form>
				</div>
        <div class="col-md-6 col-sm-12 col-xs-12 div2" style="border-left: 1px solid #7f6942; ">
          <p>
            <strong> M/S. Jaysing G. Hujare (Jadhav)</strong><br>
            Civil Engineer & Contractor
          </p>
          <p>
            <strong>Kolhapur Office :</strong><br>
               1360 'B' Ward, Vishnu Plaza, Khari corner, <br>
               Kolhapur - 416012
          </p>
          <p>
              Office : (+91) ( 0231) 2623922 <br>
              Mobile : (+91) 9822006831 <br>
              Email : director@jaysinghujare.com , jaysinggh@rediffmail.com <br>
          </p>
          <div class=-"gmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.708422109014!2d74.22053131434431!3d16.69146812689612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc10009475415fb%3A0x31c01de2e1171b7!2sM%2Fs.%20Jaysing%20Hujare!5e0!3m2!1sen!2sin!4v1570767106400!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
			</div>
	</div>
</div>


</body>
<?php
include('footer2.php');
?>
</html>
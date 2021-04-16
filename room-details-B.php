<?php include 'headernew.php';?>

<div class="container">

<h1 class="title">Wow Brows Eyebrow Pencil</h1>



 <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/pic/04.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/pic/05.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/pic/06.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
  <!-- RoomCarousel-->

<div class="room-features spacer">
  <div class="row">
    <div class="col-sm-12 col-md-5"> 
    <p>A retractable eyebrow pencil that's 100% smudge-proof, waterproof and long wearing with a unique paddle brush. Comes in two alluring shades; Chocolate, a deep warm to medium brown shade and Cinnamon, a soft light brown shade.</p>
    <p>Directions for Use: Apply in short strokes to outline and fill in brows, then use the styling brush to blend out and comb into place.</p>
	<p>Storage Conditions: Store in a clean and dry place at temperature not exceeding 30°C. Avoid direct exposure to sunning and heat.</p>
    </div>
    <div class="col-sm-6 col-md-3 amenitites"> 
    <h3>Ingredients</h3>    
    <ul>
      <li>Synthetic Hard Wax, Ozokerite, Cyclopentasiloxane, Trimethyslsiloxysilicate, Isohexadecane </li>
      <li>Hydrogenated Microcrystaline Cera, Dimethicone</li>
      <li>Black Iron Oxide, D&C Black 2, Titanium Dioxide</li>
      <li>RED Iron Oxide, Yellow Iron Oxide, Hyaluronan</li>
      <li>Tocopheryl Acetate</li>
    </ul>
    

    </div>  
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Net Weight<span>11 ml</span></div>
    </div>
    <div class="col-sm-3 col-md-2">
      <div class="size-price">Price<span>Php 220.00</span></div>
    </div>
	<div class="col-sm-5 col-md-4">
<h3>Fill out to Order</h3>
    <form action="reserveB.php" role="form" class="wowload fadeInRight" method="POST" onSubmit="alert('Order Placed!');">
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" required= "">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required= "">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  name="phone" placeholder="Phone" required= "">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-6">
            <select class="form-control" name="quantity">
              <option>Quantity</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            </div>        
            <div class="col-xs-6">
            <select class="form-control" name="modeofpayment">
               <option>Mode of Payment</option>
              <option value="Cash on Delivery">COD</option>
              <option value="Credit Card">Credit Card</option>
              <option value="GCash">Thru GCash or 7/11</option>
            </select>
            </div></div>
        </div>
         <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="date" id="expiry-month">
                <option>Date</option>
                <option value="01">1</option>
                <option value="02">2</option>
                <option value="03">3</option>
                <option value="04">4</option>
                <option value="05">5</option>
                <option value="06">6</option>
                <option value="07">7</option>
                <option value="08">8</option>
                <option value="09">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
				<option value="12">12</option>
                <option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
			    <option value="18">18</option>
				<option value="19">19</option>	 
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
			    <option value="23">23</option>
			    <option value="24">24</option>
			    <option value="25">25</option>
			    <option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="month" id="month">
                <option>Month</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
              </select>
            </div>
            <div class="col-xs-4">
              <select class="form-control" name="year">
                <option value="13">2013</option>
                <option value="14">2014</option>
                <option value="15">2015</option>
                <option value="16">2016</option>
                <option value="17">2017</option>
                <option value="18">2018</option>
                <option value="19">2019</option>
                <option value="20">2020</option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
        </div>
        <input type="submit" class="btn btn-default" value="Submit" name="insertdata">
    </form>    
</div>
</div>  
</div>
</div>
	</div>
	</div>
                     


</div>
<?php include 'footer.php';?>
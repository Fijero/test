
<!-- REQURING HEADER PART -->
<?php require('head.php') ?>


<!-- ERROR MSG CSS -->

<style type="text/css">
	
	#track_msg{
		color: white;
		background: red;
		position: absolute;
		top: -20px;
		left: 40%;
		opacity: 1;
		text-align: center;
		width: ;
		display: none;
		height: 50px;
		margin: 0 auto;
		font-size: 21px;
		padding: 10px;
	}

	/*END OF ERROR MSG STYLING*/


</style>
<!-- BEGINING OF FIRST BODY SECTION -->

<div class="first_body_container">
	<div class="first_section"><div class="body_txt"><span id="txt_shift"><div><b>WE KNOW<br>WE CAN DELIVER</b><br><br>We specialize in a variety of logistics services. Our aim is to deliver the top level of logistics on your request</div></span><span id="quick_cover"><div class="quick_track"><a href="#"><span>Track Order</span></a><a href="#"><span>Procurement</span></a></div></span></div>
	</div>
</div>

<!-- END OF FIRST BODY SECTION -->

<div class="track_part1">
	<div id="track_part1_txt"><p>Enter your tracking Number</p></div>
	<div><form method="POST" action="tracking.php" onsubmit="return(valid())"><i><input type="text" name="track" placeholder="Tracking Number" id="track_id_in" required></i><i><input type="submit" name="" value="Track your product" id="sub_id" onclick="chek()"></i></form>

		<div id="cc"></div>

<!-- <script type="text/javascript">
	function valid(){
		if(document.getElementById('track_id_in').value>=1){
		document.getElementById('cc').innerHTML='now';
	}
}
</script> -->


<?php
if(isset($_GET['invalid'])){ ?>
	<div id="track_msgg">invalid tracking id entered!!</div>
<script type="text/javascript">
setTimeout(function(){
	$(document).ready(function(){
		$("#track_msgg").fadeOut(2000);
	});
},3000);
</script>

<?php
}
?>
</div>
</div>

<div class="first_txt_div">
	<div><p><b>World Class Shipping Services</b></p><p>As one of the leading freight forwarders in the United States. You can always rely on Waveitcourier first class shipping servives at very competitive rates to ensure the fastest connection of your shipments by Air/Sea from any part of the world to any location. Waveitcourier main goal is to provide you with excellent services while making sure that your money and time are well preserved. By virtue of our exclusive agreements and commitments with leading carriers in both Air and Sea, We enjoy special rates on all of our shipments and confirmed space in every booking which will pass to you to guarantee a speedy and hassle-free delivery</p></div>
</div>


<div class="second_body_container">
	<div><img src="pics/wave1.jpg"></div>
	<div class="second_include"><b> WAVEITCOURIER WORLD WIDE OCEAN FREIGHT SERVICES INCLUDE:</b>
		<div class="stuff_list"><p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;<span>Direct pick of container from any location, factory, warehouse, home, etc</span></p>
			<p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Frequent sailing with most reliable lines</p><p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Efficient custom clearance and forwarding </p><p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Roll on Roll Off services</p><p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;L.C.L Consolidation</p><p><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;F.C.L Consolidation</p></div>
			<div class="mini_quick"><div>Schedule a Pickup in USA </div><div> Authorize a Collection in Nigeria</div></div>
	</div>
</div>
	
</div>

<div class="service_txt">
	<p>WAVEITCOURIER SERVICES</p>
	<p>You have a need, we have the <span>solution</span></p>
</div>

<div class="service_container">
	<div class="service_mini_container1">
	  <div><p><i class="fa fa-ship"></i></p><p id="service_tip">SHIPING</p><p>Our international express service delivers time sensitive documents and parcels nationwide to over 200 countries</p></div>
	  <div><p><i class="fa fa-train"></i></p><p id="service_tip">COURIER</p><p>For our same-day services, shipments received before 10:00am are guaranteed to be delivered to selected airport cities</p></div>
	  <div><p><i class="fa fa-subway"></i></p><p id="service_tip">LOGISTICS</p><p>Our Domestic Economy Services has been specifically designed to suit both individual and corporate organisations</p></div>
	</div>

	<div class="service_mini_container2">
		<div><p><i class="fa fa-shopping-cart"></i></p><p id="service_tip" id="service_tip">E-COMMERCE</p><p>Our e-commerce services can save you time and money in an increasingly competitive and fast changing business landscape.</p></div>
		<div><p><i class="fa fa-superpowers"></i></p><p id="service_tip">SPECIALISED SOLUTIONS</p><p>Our customised business solutions can either address your entire supply chain or smaller element within it such</p></div>
		<div><p><i class="fa fa-recycle"></i></p><p id="service_tip">CUSTOM SOLUTIONS</p><p>Every business has different supply chain challanges; which means that standard solutions are rarely effective.</p></div>
	</div>
</div>



<div class="third_container_all">

   <div class="third_container">
        <div class="third_container_bg">
        	<div class="third_parts">
   	          <div id="third_head"><p>FAST & RELIABLE<br><b>INQUIRY</b></p></div>
   	          <div id="third_head1">Send us your inquiry-We are pleased to send you an offer without obligation. <br>Our solutions are tailored on your individual requirements.</div>
   	          <div id="third_head2"><a href="#"><button>SEND REQUEST</button></a></div>
   	      </div>
   	    </div>
   </div>

</div>



<div class="fourth_container_all">

<div class="fourth_container">
	<div>
		<div> <p id="feature_tip">KEY FEATURES</p></div>
		<div id="fourth_list">
			<div><i class="fa fa-plus"></i></div>
			<div><p id="tip_exp">100% Safe Delivery</p><p>We pride on being the only indigenous logistics provider that has the vision, capacity and world class client service culture that can rival any international brand.</p></div>
		</div>
		<div id="fourth_list">
			<div><i class="fa fa-plus"></i></div>
			<div><p id="tip_exp">Fast & On Time </p><p>We understand that most times, the cost for delays in logistics far outweigh the cost of the transaction itself. Therefore, We have invested in acquiring robust technology, infrastructure and hiring people who continuosly deliver on time, every time.</p></div>
		</div>
	</div>

	<div class="point_div"><p>Between the point of departure and destinatin there is <b>WAVEIT COURIER</b></p><p><b>WAVEIT</b> is a provider of end-to-end logistics solutions to businesses and institutions across the globe.</p><p>We are currently among the top 4 logistics providers in the country, operating from over 45 locations across the Globe. <b>
	WAVEIT</b> has been in the distribution and logistics business since 2009.</p></div>
</div>

</div>




<div class="fifth_container_all">

	<div class="fifth_container">
       <div><p>Looking for more? <br> Here are a few places to explore.</p></div>
       <div class="short_quicks"><nav><ul><a href="#"><li>About us</li></a><a href="#"><li>Import Services</li></a><a href="#"><li>Delivery</li></a><a href="#"><li>Contact us</li></a></ul></nav></div>
	</div>

</div>
<!-- CSS HERE -->

<style type="text/css">
	#wel_notice{
		display: none;
	}
</style>

<!-- JAVASCRIPTS HERE!!!!!! -->


<script type="text/javascript">

	$(document).ready(function(){
	$(".quick_track span").eq("1").css("background","#ff9900");
	$(".second_body_container div b").eq("1").css("text-align","center");

	$(".service_txt p").eq("0").css("font-size","13px");
	$(".service_txt p").eq("1").css("font-size","31px");
	$(".service_txt p span").eq("0").css("color","#ff9900");
	$(".point_div p").eq("0").css({"color":"", "font-size":"28px","line-height":"30px","font-weight":"bolder"});
	$(".point_div p b").css({"color":"#ff9900"});
	$(".point_div p").css({"margin-top":"30px"});

});

</script>



<!-- SCROLL TO TOP STYLING -->


<button onclick="topfunction()" title="to top" id="scroll_to_top"><i class="fa fa-arrow-up"></i></button>


<script>
	// SCROLL TO TOP JAVASCRIPT

mytotop=document.getElementById("scroll_to_top");

window.onscroll=function(){
scrollfunction()
};

function scrollfunction(){
if(document.body.scrollTop>40 || document.documentElement.scrollTop>40){
mytotop.style.display="block";
}
else{
mytotop.style.display="none";
}
}

function topfunction(){
document.documentElement.scrollTop=0;
}

</script>



<?php require("footer.php") ?>

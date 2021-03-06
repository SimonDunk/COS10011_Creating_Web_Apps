<?php

require_once ("header.php");
?>
		<h1>
			User Agents
		</h1>
		<div class="flexbox-container">
			<!-- content aligned to the left-->
			<div class="leftContent">
							
				<section>
					<h2> About </h2>
					<p class="bodyTxt">User agents is software that you have installed on your computer to view this very page! </p>
					<p class="bodyTxt">User agents are commonly referred to as web browsers.</p>
					<p class="bodyTxt">a User agent is a line of text identifying the browser to the web server.</p>
				</section>
				<section>
					<p class="bodyTxt" id="wiki">User agents communicate with the server on your behalf and convert the text/code into the text, images and colour you see on your web browser. </p>
					<p class="bodyTxt"> when trying to connect to a website with http method the computer will send a user agent header file that informs the server what web browser the client is using so it can run specific tasks to get the browser to properly load the website. </p>
				</section>
				<section id="htg">
					<h2> Details </h2>
					<p class="bodyTxt">When you attempt to load a website your web browser will send information in the HTTP header which includes the User agent field.</p>
					<p class="bodyTxt">Its your computers way of introducing its self to the server.</p>
					<p class="bodyTxt">The server then can respond with different webpages to different operating systems and web browsers.</p>
					<p class="bodyTxt">An example of this is when you load <a href="https://www.google.com.au/">google.com</a> on any browser but google chrome it asks you to install google chrome.</p>
				</section>
				<section>
					<h2> History </h2>
					<p class="bodyTxt">It all started when Mosaic, the first browser to use a user agent string, supported the frames feature. Web servers checked to see if the user agent contained the word Mozilla. Eventually Internet Explorer supported frames however they didn't recieve the frames since they didn't have Mozilla in the User Agent String. So eventually Microsoft added Mozilla in the string to get the version of the site with frames.  </p>
				</section>
				
				<section>
					<aside>
					A Youtube video explaining user agents
					</aside>
					<iframe width="420" height="315" src="https://www.youtube.com/embed/StXvXtFdkOc" id="iframe"></iframe>
				</section>
			</div>
			<!-- content aligned to the right-->
			<div class="rightContent">
			<section>
				<img src="images/logos.jpg" alt="different types of web browsers" id="logos"/>
				<aside>here are some icons for different web browsers </aside>
			</section>
			<section>
				<h2>Examples of more common user agents include: </h2>
				 <ul><li>Google Chrome</li><li>Mozilla Firefox</li><li>Internet Explorer</li><li>Safari</li></ul>
				<h2> Use </h2>
				<p class="bodyTxt">A use for User Agents is so that when your on your phone it will load a mobile oriented version of the website for convenient use and accessibility.</p>
				<h2> Standardisation </h2>
				<p class="bodyTxt" id="useragentg"> The W3C has a standardisation for user agent accessibility guidelines to make sure developers meet set standards improving accessibility through different web browsers. you can find out more <a href="http://www.w3.org/TR/UAAG20/">here</a></p>
			</section>
			<section>
					<h2> Example </h2>
					<p class="bodyTxt" id="useragent"> an example of a user agent header file: Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36</p>
					<p class="bodyTxt"> You can find out about your own user agent: <a href="http://user-agents.my-addr.com/user_agent_request/user_agent_examples-and-user_agent_types.php">here</a></p>
					<p class="bodyTxt">Some users can mask what user agent the server receives. users do this to explore browser specific only sites, mobile versions or for website testing purposes. An example of a user agent switch can be found: <a href="https://addons.mozilla.org/en-Us/firefox/addon/user-agent-switcher/" >here</a></p>
				</section>	
				
			</div>
			
		</div>
		<!-- content aligned to the middle under the left/right content-->
		<div class="content">
			<section>
			<aside> global statistics for top 9 browsers </aside>
			<img src="images/graphbrowser.png" alt="top 9 browsers graph" id="stats" />
			</section>
			<section>
			<aside> global change in statistics for top 9 browsers over the last 5 years </aside>
			<img src="images/barchartbrowser.png" alt="change of popularity in browser use" />
			<h2> Understanding the graph </h2>
			<article>In the last 5 years web browsing user agents have changed quite greatly. Internet explorer use to be the leader and had a market share of 53% but has dropped to 13%. Firefox which had a share of 31% has dropped to 12%. They both have been in decreasing popularity compared to google chrome which has increased from 6.6% to 43%  </article>
			</section>
			
			<img id="browser" src="images/browser.png" alt="Google Chrome" width="1" height="1"/>

			<p>Picture of a web browser:</p>
			<!-- canvas used to draw text, images and shapes-->
			<canvas id="myCanvas" width="800" height="400"
			style="border:1px solid #d3d3d3;">
			Your browser does not support the HTML5 canvas tag.</canvas>

			<p><button onclick="myCanvas()">Load Picture</button></p>

			<!-- script for the canvas-->
			<script>
				function myCanvas() {
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					var img = document.getElementById("browser");
					ctx.drawImage(img,10,10);
					ctx.font = "30px Arial";
					ctx.strokeText("Hello World",10,50);
				}
			</script>	
				
		</div>
		<div>
			<p class="bodyTxt">Resources</p>
			<ul>
				
				<li>
					<a href="#wiki">Wikipedia</a>  <a href="http://en.wikipedia.org/wiki/User_agent" target="_blank">link</a>
				</li>
				<li>
					<a href="#useragent">example</a>  <a href="http://user-agents.my-addr.com/user_agent_request/user_agent_examples-and-user_agent_types.php" target="_blank">link</a>
				</li>
				<li>
					<a href="#useragentg">reference</a>  <a href="http://www.w3.org/TR/UAAG20/" target="_blank">link</a>
				</li>
				<li>
					<a href="#logos">logos</a>  <a href="http://reytamayo.com/wp-content/uploads/2014/10/browser-logos.jpg" target="_blank">link</a>
				</li>
				<li>
					<a href="#stats">statistics</a>  <a href="http://gs.statcounter.com/" target="_blank">link</a>
				</li>
				<li>
					<a href="#iframe">video</a>  <a href="https://www.youtube.com/watch?v=StXvXtFdkOc" target="_blank">link</a>
				</li>
				<li>
					<a href="#htg">what is</a> <a href="http://www.howtogeek.com/114937/htg-explains-whats-a-browser-user-agent/" target="_blank">link</a>
				</li>
			</ul>
		</div>
	</div>
	
    <?
  require_once("footer.php");
  ?>
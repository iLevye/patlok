<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/patlok/script/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/patlok/semantic/dist/semantic.min.css">
	<script src="/patlok/semantic/dist/semantic.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("textarea").focus(function(){
				$(".send_message").fadeIn();
				$(".write_comment").animate({
					    "margin-bottom": "60px"
				});
			});
			$("textarea").blur(function(){
				$(".send_message").fadeOut();
				$(".write_comment").animate({
					    "margin-bottom": "0px"
				});
			});
		});
			
	</script>
	<style type="text/css">
		.ui.fitted.divider {margin-bottom:20px; margin-top:20px;}
	</style>
</head>
<body>



	<div class="ui secondary pointing menu ">
		<div class="ui container">
		  <a class="item active">
		    Home
		  </a>
		  <a class="item">
		    Messages
		  </a>
		  <a class="item">
		    Friends
		  </a>
		  <div class="right menu">
		    <a class="ui item">
		      Logout
		    </a>
		  </div>
		</div>
	</div>
	


	<div class="ui doubling grid container" style="margin-top:30px;">
		<div class="three wide column">
			<div class="ui vertical fluid tabular menu">
				<div class="item" style="padding-left:0px;">
			      <div class="ui icon input">
			        <input type="text" placeholder="Search...">
			        <i class="search link icon"></i>
			      </div>
			    </div>
			  <a class="active item">
			    Around of you
			  </a>
			  <a class="item">
			    Haberler
			  </a>
			  <a class="item">
			    Etkinlikler
			  </a>
			  <a class="item">
			    Spotlar
			  </a>
			  <a class="item">
			    Fotoğraf
			  </a>
			  <a class="item">
			    Video
			  </a>
			  <a class="item">
			    2. El İlanlar
			  </a>
			  <a class="item">
			    Dükkanlar
			  </a>
			  <a class="item">
			    Patenler
			  </a>
			  <a class="item">
			    Q/A Style
			  </a>
			</div>
		</div>
		<div class="nine wide column">
			
			<div class="ui feed">
			  <div class="event">
			    <div class="label">
			      <img src="http://semantic-ui.com/images/avatar/small/helen.jpg">
			    </div>
			    <div class="content">
			      <div class="date">
			        3 days ago
			      </div>
			      <div class="summary">
			         <a>Helen Troy</a> added 2 photos
			      </div>
			      <div class="extra images">
			        <a><img src="http://semantic-ui.com/images/wireframe/image.png"></a>
			        <a><img src="http://semantic-ui.com/images/wireframe/image.png"></a>
			      </div>
			    </div>
			  </div>
			  <div class="ui fitted divider"></div>
			  <div class="event">
			    <div class="label">
			      <img src="http://semantic-ui.com/images/avatar/small/laura.jpg">
			    </div>
			    <div class="content">
			      <div class="date">
			        3 days ago
			      </div>
			      <div class="summary">
			         <a>Laura Faucet</a> post a question
			      </div>
			      <div class="extra text">
			        Have you seen what's going on in Israel?
			      </div>
			      <div class="ui comments">
				      <div class="comments">
					      <div class="comment">
					        <a class="avatar">
					          <img src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
					        </a>
					        <div class="content">
					          <a class="author">Jenny Hess</a>
					          <div class="metadata">
					            <span class="date">Just now</span>
					          </div>
					          <div class="text">
					            Elliot you are always so right :)
					          </div>
					          <div class="actions">
					            <a class="reply">Reply</a>
					          </div>
					        </div>
					      </div>
					      <div class="comment">
						    <a class="avatar">
						      <img src="http://semantic-ui.com/images/avatar/small/joe.jpg">
						    </a>
						    <div class="content">
						      <a class="author">Joe Henderson</a>
						      <div class="metadata">
						        <span class="date">5 days ago</span>
						      </div>
						      <div class="text">
						        Dude, this is awesome. Thanks so much
						      </div>
						      <div class="actions">
						        <a class="reply">Reply</a>
						      </div>
						    </div>
						  </div>
					    </div>
					</div>
					<a class="ui horizontal">
					  3 more answers
					</a>
			    </div>
			  </div>
				
				<div class="ui fitted divider"></div>
			   <div class="event">
			    <div class="label">
			      <img src="http://semantic-ui.com/images/avatar/small/matt.jpg">
			    </div>
			    <div class="content">
			      <div class="date">
			        3 days ago
			      </div>
			      <div class="summary">
			         <a>Laura Faucet</a> uploaded a video
			      </div>
			       <div class="extra text">
			        "360 out top soul"
			      </div>
			      <div class="extra text">
			        <video controls> 
					  <source src=http://techslides.com/demos/sample-videos/small.webm type=video/webm> 
					  <source src=http://techslides.com/demos/sample-videos/small.ogv type=video/ogg> 
					  <source src=http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4>
					  <source src=http://techslides.com/demos/sample-videos/small.3gp type=video/3gp>
					</video>
			      </div>
			    </div>
			  </div>


			  <div class="ui fitted divider"></div>


			</div>
			</div>
		<div class="four wide column">
			<div class="ui cards">
			  <div class="card">
			    <div class="content">
			      <div class="header">
			        Mini Pipe Contest '15
			      </div>
			      <div class="meta">
			        27 Ağustos, Pazar
			      </div>
			      <div class="description">
			        Lorem ipsum dolor sit amet ve lorem ipsum dolora ahmet sittir git
			      </div>
			    </div>
			    <div class="extra content">
			      <div class="ui two buttons">
			        <div class="ui basic green button">Join</div>
			        <div class="ui basic blue button">Details</div>
			      </div>
			    </div>
			  </div>
			  <div class="card">
			    <div class="content">
			      <img class="right floated mini ui image" src="http://semantic-ui.com/images/avatar/small/jenny.jpg">
			      <div class="header">
			        Jenny Hess
			      </div>
			      <div class="meta">
			        New Member
			      </div>
			      <div class="description">
			        Jenny Cuma akşamı Caddebostan Etkinlik Alanı'nda olmayı planlıyor. 
			      </div>
			    </div>
			    <div class="extra content">
			      <div class="ui two buttons">
			        <div class="ui basic green button">Join</div>
			        <div class="ui basic red button">Not interest</div>
			      </div>
			    </div>
			  </div>

			  <div class="ui card">
				  <div class="image">
				    <img src="http://i.ytimg.com/vi/r-UXtI6zNnA/maxresdefault.jpg">
				  </div>
				  <div class="content">
				    <a class="header">Caddebostan Etkinlik Alanı</a>
				    <div class="meta">
				      <span class="date">since 2009</span>
				    </div>
				    <div class="description">
				      Slalom, Aggressive, Street Hockey
				    </div>
				  </div>
				  <div class="extra content">
				    <a>
				      <i class="user icon"></i>
				      22 member was here
				    </a>
				  </div>
				</div>


			</div>
		</div>


	</div>


	 <div class="ui divider" style="margin-top:190px;"></div>
    <div class="ui large footer">
        <div class="ui footer container">
            <footer class="ui row">
                <div class="eight wide column">
                    <p class="copyright">© Copyright no one at all. Go to town.</p>
                </div>
            </footer>
        </div>
    </div>

	
</body>
</html>
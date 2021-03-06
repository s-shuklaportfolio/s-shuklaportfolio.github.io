<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="images/resume.png" />
    <link href="https://fonts.googleapis.com/css?family=Nova+Square" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="lib/paper.bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    
</head>
<body>
                                     
    <header id="top">
                                  <!--/////////navbar/////////-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <div class="logo">
                <img src="./images/logo-shivams.png">
                </div>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
                  <li><a href="#top">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#education">Education</a></li>
                  <li><a href="#skill">Skill</a></li>
                  <li><a href="#my_work">Projects</a></li>
                  
                 
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    </header>
                          <!--/////////title screen/////////-->
   <div class="container-fluid" >
   <section class="row portfoliosection">
          <div class="fill-screen" style="background-image: url(./images/laptop-1.jpg)">
            <img class="title img-circle img-responsive" src="./images/my-pic1.jpg" >
            <div class="title first-name">Shivam
              <spam class="last-name">
                Shukla </spam>
            </div>
            <div class="down-button down-icon" onclick="$('#about').animatescroll({scroll:3000,padding:50});">
              <a href="#">
                <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </section>
                                  <!--/////////about me/////////-->
       
       <section class="row " >
           <?php '
           
           
           
           
           								<div class="">
								<div class=" col-md-12">
								<h3 class="header smaller lighter blue">View Chemists</h3>
								</div>
                                    
                               <div>
		
                    <table id="example" class="table table-striped table-bordered table-hover">
                    <thead>

                    <tr>
                    <th>S.No.</th>
                    <th>State</th>
                    <th>Head Quarter</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Chemist</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php $i=1;
                    foreach($this->Chemist_model->getchemist() as $sp)
                    {?>

                    <tr>
                    <td>
                    <?php echo $i++; ?>
                    </td>

                     <td><?php echo $this->User_model->getval("state","state_id",$sp->state,"state_name")?></td>
                    <td><?php echo $this->User_model->getval("headquarter","headquarter_id",$sp->headquarter,"headquarter_name")?></td>
                    <td><?php echo $this->User_model->getval("city","city_id",$sp->city,"city_name")?></td>
                    <td><?php echo $this->User_model->getval("area","area_id",$sp->area_name,"area_name")?></td>
                    <td><?php echo $sp->chemistname?></td>
                    <td><?php echo $sp->address?></td>
                    <td><?php echo $sp->mob?></td>
                    <td><?php echo $sp->phoneno?></td>
                    <td><?php echo $sp->status?></td>

                    <td>
                    <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" href="<?php echo base_url();?>index.php/chemist/chemist/editchemist/<?php echo $sp->chemist_id; ?>">
                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>
                    <a class="red" href="<?php echo base_url();?>index.php/state/deletechemist/<?php echo $sp->chemist_id; ?>">
                    <i class="ace-icon fa fa-trash-o bigger-130"></i>
                    </a>
                    </div>
                    </td>


                    </tr>

                    <?php } ?>
                    </tbody>
                    </table>

           
           
           
           
           
           
           
           
           
           
           ' ?>
           
           <h1> view </h1>
           
                   
           
           
           
           </section>
       <section class="row portfoliosection" id="about">
           <article class="sec-header">
         <h3><span><i class="fa fa-user"></i>  About Me</span></h3>
           </article> 
           <!--/////////about me part-1/////////-->
           <article class="col-md-6">
              “My name is Shivam shukla, and I enjoy coding and desigening. I am a dedicated person ,I also enjoy reading, and the knowledge and perspective that my reading gives me has strengthened my presentation abilities. I have a ability to plan, schedule, and handle many different tasks at once. This flexibility will help me in the classroom, where there are many different personalities and learning styles.”
            </article>
            <!--/////////about me part-2.1/////////-->
            <article class="col-md-6 table-custom">
              <dl class="dl-horizontal">
                <dt>Email</dt>
                <dd>shivamofficial.use@gmail.com</dd>
                <dt>Address</dt>
                <dd><address>Panki, Kanpur<br>Country: 2080-17</address></dd>
                <dt>Mobile</dt>
                <dd>+91-884-041-5158</dd>
              </dl>
             <!--/////////about me part-2.2(icon)/////////-->
             <div class="social">
               <a href="#"><i class="fa fa-github"></i></a>
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
             </div>
         </article>
       </section>
                                  <!--/////////about me-end/////////-->

        <!--//////image1//////-->
        <section class="row hidden-xs" >
          <div class="fill-screen fixed-attachment" style="background-image:url(./images/work-1.jpg)"></div>
        </section>

                                   <!--/////////education/////////-->
       <section class="row portfoliosection" id="education">
           <article class="sec-header">
         <h3><i class="fa fa-graduation-cap"></i><span>Education</span></h3>
           </article> 
         
        <article>
          <div class="activity-elements">
            <div class="card-container">
               <!--//////card1//////-->
              <div class="card">
                <div class="front">
                  <div>
                  <h2><i class="fa fa-graduation-cap"></i></h2>
                  <h4>Masters of Computer Application</h4>
                  <h6>Dr.VSICS,Kanpur,UP,India</h6>
                </div>
              </div>
                <div class="back">
                  <div>
                  <h2><i class="fa fa-graduation-cap"></i></h2> 
                  <h4>AKTU/Affiliated</h4>
                  <h3>60%</h3>
                  </div>
                </div>
              </div>
              <!--//////card1-end//////-->

              <!--//////card2//////-->
              <div class="card">
                  <div class="front">
                    <div>
                    <h2><i class="fa fa-graduation-cap"></i></h2>
                    <h4>Bachelor of Science</h4>
                    <h6>CSJM University,Kanpur,UP,India</h6>
                  </div>
                </div>
                  <div class="back">
                    <div>
                    <h2><i class="fa fa-graduation-cap"></i></h2> 
                    <h4>Subjects</h4>
                    <h5>Physics ,  Chemistry and  Math</h5>
                    </div>
                  </div>
                </div>
                <!--//////card2-end//////-->

              <!--//////card3//////-->
              <div class="card">
                  <div class="front">
                    <div>
                    <h2><i class="fa fa-graduation-cap"></i></h2>
                    <h4>Intermediate</h4>
                    <h6>UP Board,Kanpur,UP,India</h6>
                  </div>
                </div>
                  <div class="back">
                    <div>
                    <h2><i class="fa fa-graduation-cap"></i></h2> 
                    <h4>Subjects</h4>
                    <h5>Science , Math and Computer</h5>
                    </div>
                  </div>
                </div>
                <!--//////card3-end//////-->

            </div>
          </div>
        </article> 
       </section>
                                  <!--/////////education-end/////////-->

        <!--//////image2//////-->
        <section class="row hidden-xs">
          <div class="fill-screen fixed-attachment" style="background-image:url(./images/work-desk-1.jpg)"></div>
        </section>

                                   <!--/////////skill/////////-->

       <section class="text_banner portfoliosection" id="skill" >
           <article class="sec-header">
         <h3><i class="fa fa-cogs"></i><span>Skill</span></h3>
           </article> 
              <!--////progress-bar////-->
 

 <article class="row" id="skill-progress">

   <!--////bar-1////-->
  <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
       <span>HTML/CSS</span>
      <span class="pull-right skill-level">intermediate</span>
    </div>
  </div>
 

 <!--////bar-2////-->
 
  <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
       <span>Bootstrap</span>
      <span class="pull-right skill-level">intermediate</span>
    </div>
  </div>
 

 <!--////bar-3////-->
 
     <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
       <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
          <span>WordPress</span>
         <span class="pull-right skill-level">intermediate</span>
       </div>
     </div>
    

 <!--////bar-4////-->
  
     <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
       <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
          <span>JavaScript</span>
         <span class="pull-right skill-level">intermediate</span>
       </div>
     </div>
    </article>

 <!--////bar-5////-->
  
 <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
     <span>jQuery</span>
    <span class="pull-right skill-level">beginner</span>
  </div>
</div>
</article>

 <!--////bar-6////-->
  
 <div class="progress col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4">
  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
     <span>PHP</span>
    <span class="pull-right skill-level">intermediate</span>
  </div>
</div>
</article>


    <!--////skill-cards////-->

             
    <article class="row skill-cards">
      <!--////card1////-->
       <div class="col-md-6 col-sm-6">
         <div class="skill-tech">
           <h4><i class="fa fa-code">    Coding</i></h4>
           <p>I like to take challenge that's the reason I like the coding must. Today I know the Php so I prefer the language for coding is Php.. </p>
         </div>

       </div>
      <!--////card2////-->
      <div class="col-md-6 col-sm-6">
          <div class="skill-tech">
            <h4><i class="fa fa-globe">    Web Development</i></h4>
            <p>If I learn multiple things then I become a web developer . Soon I want to become a best web developer or software engineer.</p>
          </div>

        </div>
      <!--////card3////-->
      <div class="col-md-6 col-sm-6">
          <div class="skill-tech">
            <h4><i class="fa fa-database">    Data Base</i></h4>
            <p>I know the average knowledge of database. I know the MySql, Oracle kind of plateform of performing database. And I believe that If I practise more I can easily perfect in database also. I believe in practising instead of learnig.</p>
          </div>

        </div>
      <!--////card4////-->
      <div class="col-md-6 col-sm-6">
          <div class="skill-tech">
            <h4><i class="fa fa-heart">    Design</i></h4>
            <p>I prefer bootstrap, HTML5, css3 for design the software . I know few Ide for designing the basic part of any software is designing.</p>
          </div>

        </div>

     </article>


   
</section>
                          <!--/////////skill-end/////////-->

              

             
            
        <!--//////image3//////-->
        <section class="row hidden-xs">
          <div class="fill-screen fixed-attachment" style="background-image:url(./images/work-desk-2.jpg)"></div>
        </section>

                                   <!--/////////my work/////////-->
       <section class="row portfoliosection" id="my_work">
           <article class="sec-header">
         <h3><i class="fa fa-building-o" aria-hidden="true"></i>  <span>My Work</span></h3>
           </article> 
           <article class="my-work">
             <div class="box box-slim col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4 ">
               <h4>Project 1</h4>
               <h5><b><i>Book My Ticket</i></b>   <i class="fa fa-ticket" aria-hidden="true"></i>
               </h5>
               <p class="small-text">With BookMyTicket's Web application you can now book tickets for movies, plays, concerts, sports and many other events happening in your city. You can book and buy movie tickets online.</p>
             </div>
             <div class="box box-slim col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4 ">
              <h4>Project 2</h4>
              <h5><b><i>Online Exam System</i></b>   <i class="fa fa-university" aria-hidden="true"></i></h5>
              
              <p class="small-text">Online Exam System will help you creating your online exam . You've decided to give an online examination.</p>
            </div>
            <div class="box box-slim col-xs-8 col-md-offset-2 col-md-8 col-md-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4 ">
              <h4>Project 3</h4>
              <h5><b><i>Online PortFolio</i></b>   <i class="fa fa-list-alt" aria-hidden="true"></i></h5>
              <p class="small-text">Online portfolios allow educators, students and professionals to showcase themselves and provide an opportunity for reflection and continued professional growth.</p>
            </div>
           </article>
       </section>


       
                                   <!--/////////my work-end/////////-->



                           <!--/////////footer/////////-->   
<footer class=" row container-fluid" style="background-color:gray;" >
  <div class="footer container-fluid" >
    <p class="small-text" style="color:black;">
      &copy; 2018 copyright Shivam Shukla
    </p>
    <div class="social">
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>

  </div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/animatescroll.min.js"></script>
    
</body>
</html>

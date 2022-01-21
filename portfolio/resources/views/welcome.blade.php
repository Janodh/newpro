<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Personal Portfolio Website </title>
    
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
      <a href="#" class="brand">K.S.J JEEWANTHA</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="#main">Home</a>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#services">Services</a>
        <a href="#work">Work</a>
        <a href="#contact">Contact</a>
        <a class ="btn btn-sm btn-outline-secondary" href="{{route('register')}}">sign up</a>
      </div>
    </header>

    <section class="main" id="main">
      <div class="content">
        <h2>Hello, I'm<br><span>Janodh JEEWANTHA</span></h2>
        <div class="animated-text">
          <h3>Full Stack Developer</h3>
          <h3>Web Developer</h3>
          <h3>Web Designer</h3>
        </div>
        <a href="/download" class="btn">Resume Download</a>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
    </section>

    <section class="about" id="about">
      <div class="title reveal">
        <h2 class="section-title">About Me</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="{{asset('images/img1.jpg')}}" alt="">
          </div>
        </div>
        <div class="column col-right reveal">
          <h2 class="content-title">Hey There! I'm Jeewantha</h2>
          <p class="paragraph-text">I am hardworking and ambitious individual with a great passion. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am looking forward for a suitable job opportunity in which I can put my knowledge and experience in to practice, ultimately benefiting the operations of the organization that I work for.</p>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
    </section>

    <section class="skills" id="skills">
      <div class="title reveal">
        <h2 class="section-title">My Skills</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <h2 class="content-title">My Skills and Experiences</h2>
          <p>I'm a fresher in the industry. But I'm pretty sure that I can quickly be adapted to the industrial culture. I have worked with web and mobile applications development. I'm familiar with Java, C language and MySQL</p>
          <a href="#" class="btn">See More</a>
        </div>
        <div class="column col-right reveal">
          <div class="bar">
            <div class="info">
              <span>HTML</span>
              <span>95%</span>
            </div>
            <div class="line html"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>CSS</span>
              <span>85%</span>
            </div>
            <div class="line css"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>Javascript</span>
              <span>80%</span>
            </div>
            <div class="line javascript"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>JQuery</span>
              <span>80%</span>
            </div>
            <div class="line jquery"></div>
          </div>
          <div class="bar">
            <div class="info">
              <span>PHP</span>
              <span>75%</span>
            </div>
            <div class="line php"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="services" id="services">
      <div class="title reveal">
        <h2 class="section-title">My Services</h2>
        <p>I have knowledge in these areas if you hire me I will do my very best.I have a creative mind and am always up for new challenges. I
am well organized and always plan ahead to make sure. I manage my time well and work honestly for the company.</p>
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="service-icon">
          <i class="fas fa-ad"></i>
          </div>
          <div class="info">
            <h3>Digital Marketing</h3>
            <p> promotion of products and services through a variety of digital channels, using the internet and mobile technology. Push and pull marketing techniques are applied, targeting consumers both directly and indirectly.</p>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
            <i class="fas fa-file-code"></i>
          </div>
          <div class="info">
            <h3>Web Development</h3>
            <p>I am professional website developer and designer, having passable knowledge on different web programming languages. I am responsible, understand the importance of deadlines and manage them well. </p>
          </div>
        </div>
        <div class="card reveal">
          <div class="service-icon">
          <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="info">
            <h3>Mobile development</h3>
            <p>I develop and build apps for various mobile technologies such as Google’s Android, Apple Ios and Windows Phone. I am familiar with java ,flutter, dart </p>
          </div>
        </div>
      </div>
    </section>

    <section class="work" id="work">
      <div class="title reveal">
        <h2 class="section-title">My Work</h2>
      </div>
      <div class="content">
      <div class="card reveal" >
        <img class="card-img-top" src="{{asset('images/work2.jpg')}}" alt="">
          <div class="card-body">
            <h4 class="card-title">online book store</h4>
            <p class="card-text">Use technologies -PHP,HTML,Bootsrap,CSS,javascript</p>
            <a href="#" class="btn">See more..</a>
          </div>
        </div>
          <div class="card reveal" >
            <img class="card-img-top" src="{{asset('images/work4.jpg')}}" alt="">
              <div class="card-body">
                <h4 class="card-title">School Database Management System</h4>
                <p class="card-text">Use technologie - C#, MS SQL Server</p>
                <a href="#" class="btn ">See more..</a>
              </div>
            </div>
              <div class="card reveal" >
                <img class="card-img-top" src="{{asset('images/work3.jpg')}}" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Pill Reminder App-(Mediclock)</h4>
                    <p class="card-text">Use technologie- flutter,Dart,firestore</p>
                    <a href="#" class="btn ">See more..</a>
                  </div>
                </div></div>
       
        <div class="title reveal">
          <a href="#" class="btn">See All</a>
        </div>
      </div>
    </section>

    <section class="contact" id="contact">
      <div class="title reveal">
        <h2 class="section-title">Contact Me</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info">
              <h3>Address</h3>
              <span>377,Kubukawatha,Gonapala</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-phone"></i>
            </div>
            <div class="info">
              <h3>Phone</h3>
              <span>+94757461443</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info">
              <h3>Email Address</h3>
              <span>janodhjeewantha@gmail.com</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-globe"></i>
            </div>
            <div class="info">
              <h3>Website</h3>
              <span>ksjjeewantha.com</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-form reveal">
            <h3>Send Message</h3>
            <div class="input-box">
              <input type="text" name="" value="" placeholder="Name">
            </div>
            <div class="input-box">
              <input type="text" name="" value="" placeholder="Email">
            </div>
            <div class="input-box">
              <textarea name="name" rows="8" cols="80" placeholder="Message"></textarea>
            </div>
            <div class="input-box">
              <input type="submit" class="send-btn" name="" value="Send">
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <span class="footer-title">K.S.J Jeewantha</span>
      <p>Copyright @2022 <a href="#">codeJ&#J/a>. All Rights Reserved.</p>
    </footer>

    <script type="text/javascript" src="{{url('js/script.js')}}"></script>

  </body>
</html>

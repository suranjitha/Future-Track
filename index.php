<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FutureTrack - Home</title>

  <style>
    body { margin:0; font-family: Arial, sans-serif; background:#f4f6f9; }

    header {
      background:#1b1f23; /* dark header */
      color:white;
      padding:15px 30px;
      display:flex;
      justify-content:space-between;
      align-items:center;
    }

    nav {
      display:flex;
      align-items:center;
      width:100%;
      justify-content:space-between;
    }

    nav h1 { margin:0; }

    nav ul {
      list-style:none;
      margin:0;
      padding:0;
      display:flex;
      align-items:center;
    }

    nav ul li { margin:0 15px; }

    nav ul li a {
      color:white;
      text-decoration:none;
      font-weight:bold;
    }

    nav ul li a:hover { color:#00c6ff; }

    /* Hero Section */
    .hero {
      text-align:center;
      padding:80px 20px;
      background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      color:white;
      border-radius: 0 0 20px 20px;
    }

    .hero h1 { font-size:48px; margin-bottom:20px; }
    .hero h5 { font-size:18px; margin-bottom:20px; font-weight:normal; }

    .hero .btn {
      background:#00c6ff;
      color:white;
      padding:12px 25px;
      border-radius:8px;
      text-decoration:none;
      font-weight:bold;
      margin-top:20px;
      display:inline-block;
    }

    .hero .btn:hover { background:#27ae60; }

    /* Scrolling Text */
    .scrolling-text {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 50px;
      overflow: hidden;
      font-size: 28px;
      font-weight: bold;
      color: #ffeb3b; /* yellow */
      position: relative;
      margin-top: 20px;
    }

    .scrolling-text span {
      position: absolute;
      opacity: 0;
      animation: scrollWords 9s linear infinite;
    }

    .scrolling-text span:nth-child(1) { animation-delay: 0s; }
    .scrolling-text span:nth-child(2) { animation-delay: 3s; }
    .scrolling-text span:nth-child(3) { animation-delay: 6s; }

    @keyframes scrollWords {
      0%   { opacity: 0; transform: translateY(100%); }
      10%  { opacity: 1; transform: translateY(0); }
      30%  { opacity: 1; transform: translateY(0); }
      40%  { opacity: 0; transform: translateY(-100%); }
      100% { opacity: 0; }
    }

    /* Feature Cards */
    .cards {
      display:flex;
      flex-wrap:wrap;
      justify-content:center;
      gap:20px;
      padding:40px;
    }

    .card {
      background:white;
      padding:20px;
      border-radius:8px;
      box-shadow:0 4px 6px rgba(0,0,0,0.1);
      width:250px;
      text-align:center;
      transition:0.3s;
    }

    .card:hover { transform:scale(1.05); background:#ecf0f1; }

    .card h3 { margin-bottom:10px; }
    .card p { font-size:14px; color:#333; margin-bottom:15px; }
    .card a { text-decoration:none; color:#00c6ff; font-weight:bold; }

    /* Success Stories */
    .success-stories {
      background: #f9f9f9;
      padding: 50px 20px;
      text-align: center;
    }

    .success-stories h2 {
      font-size: 32px;
      margin-bottom: 30px;
      color: #2c3e50;
    }

    .stories-container {
      display: flex;
      justify-content: center;
    }

    .story-card img {
      max-width: 90%;
      height: auto;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    /* Footer */
    footer {
      background:#1b1f23;
      color:white;
      text-align:center;
      padding:20px;
      margin-top:40px;
    }

    footer a { color:white; text-decoration:none; }
    footer a:hover { color:#00c6ff; }
  </style>
</head>
<body>
  <header>
    <nav>
      <h1>FutureTrack</h1>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="roadmap.php">Roadmap</a></li>
        <li><a href="interview.php">Interviews</a></li>
        <li><a href="resume.php">Resume</a></li>
        <li><a href="job.php">Jobs</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>

  <div class="hero">
    <h1>Welcome To FutureTrack</h1>
   

    <!-- New scrolling text -->
    <div class="scrolling-text">
      <span>Learn Skills</span>
      <span>Practice Interview Questions</span>
      <span>Build Resume</span>
      
    </div>

    <a href="login.php" class="btn">Login</a>
  </div>

  <!-- Feature Cards -->
  <div class="cards">
    <div class="card">
      <h3>🎯 Target Job</h3>
      <p>Choose your career goal, enter your company, and compare your current skills with required ones. Get a personalized roadmap instantly.</p>
      <a href="job.php">Explore</a>
    </div>
    <div class="card">
      <h3>🛤 Roadmap</h3>
      <p>Follow a clear step-by-step journey: Foundations → Core Development → Advanced Skills → Career Prep. Track your progress along the way.</p>
      <a href="roadmap.php">View Roadmap</a>
    </div>
    <div class="card">
      <h3>📄 Resume Builder</h3>
      <p>Create a professional resume tailored to your target job with easy templates and export options.</p>
      <a href="resume.php">Build Resume</a>
    </div>
    <div class="card">
      <h3>🎤 Interview Prep</h3>
      <p>Practice common interview questions, take mock sessions, and boost your confidence before the big day.</p>
      <a href="interview.php">Start Prep</a>
    </div>
  </div>

  <!-- Success Stories Section -->
  <section class="success-stories">
    
   <section class="success-stories">
  <h2>Success Stories</h2>
  <div class="stories-container">
    <div class="story-card">
  <img src="images/boy.jpg" width="400" height="400" alt="FutureTrack Success Stories">

      <h3>Rahul, 2nd Year Student</h3>
      <p>"FutureTrack helped me finally understand Data Structures. Now I can solve problems with confidence."</p>
    </div>
    <div class="story-card">
<img src="images/girl.jpg" width="500" height="600" alt="FutureTrack Success Stories">

      <h3>Priya, Aspiring Developer</h3>
      <p>"The roadmap gave me clarity. I built my first mini-project — a calculator app — and felt proud."</p>
    </div>
    <div class="story-card">
<img src="images/girl1.webp" width="400" height="600" alt="FutureTrack Success Stories">

 
      <h3>Asha, Final Year Student</h3>
      <p>"Interview practice modules improved my communication skills. I feel ready for campus drives."</p>
    </div>
  </div>
</section>


<footer>
  <p>© 2026 FutureTrack | Learn. Build. Get Placed.</p>
  <p><a href="index.php">Return to Home</a></p>
</footer>

<style>
  footer {
    background: #0a3d62;       /* Dark blue background */
    color: #fff;               /* White text */
    text-align: center;
    padding: 40px;
    margin-top: 40px;
  }
  footer a {
    color: #1abc9c;            /* Teal accent link */
    text-decoration: none;
    font-weight: bold;
  }
  footer a:hover {
    color: #16a085;            /* Darker teal on hover */
  }
</style>

  
</body>
</html>

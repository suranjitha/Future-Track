<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FutureTrack - Career Roadmap</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #fdfbfb, #ebedee); /* light gradient */
      margin: 0;
      color: #333;
    }

    nav {
      background:green;
      padding: 25px;
      display: flex;
      justify-content: center;
    }
    nav a {
      color:lavender;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
    }
    nav a:hover { color: #1abc9c; }

    .hero {
      background:lavender;
      padding: 50px;
      text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      margin: 20px;
      border-radius: 12px;
      animation: fadeIn 1s ease-in;
    }
    .hero h1 { color: green; margin-bottom: 15px; font-size: 2.5em; }
    .hero p { font-style: italic; color: #555; font-size: 1.2em; }

    .domains {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 40px;
      flex-wrap: wrap;
    }
    .domain-box {
      background: #ffffffcc;
      width: 220px;
      padding: 25px;
      text-align: center;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      cursor: pointer;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .domain-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.2);
      background: #f9f9ff;
    }
    .domain-box h3 { color: #1abc9c; margin-bottom: 10px; font-size: 1.3em; }

    .details {
      max-width: 900px;
      margin: 20px auto;
      background: #ffffffcc;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      display: none;
      animation: slideUp 0.6s ease;
    }
    .details h2 { color: #0a3d62; margin-bottom: 15px; }
    .details .section {
      background: #fdfdfd;
      padding: 15px;
      margin: 10px 0;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s, transform 0.3s;
    }
    .details .section:hover {
      background: #eef6ff;
      transform: scale(1.02);
    }
    .details .content {
      display: none;
      margin-top: 10px;
      color: #444;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
    @keyframes slideUp { from {transform:translateY(30px); opacity:0;} to {transform:translateY(0); opacity:1;} }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav>
    <a href="index.php">Home</a>
    <a href="job.php">Target Job</a>
    <a href="roadmap.php">Roadmap</a>
    <a href="interview.php">Interview Prep</a>
    <a href="resume.php">Resume</a>
  </nav>

  <!-- Hero Section -->
  <div class="hero">
    <h1>Career Roadmap</h1>
    <p>"Your journey to success starts with the first step."</p>
  </div>

  <!-- Domain Boxes -->
  <div class="domains">
    <div class="domain-box" onclick="showDetails('web')">
      <h3>🌐 Web Development</h3>
      <p>Frontend & Backend journey</p>
    </div>
    <div class="domain-box" onclick="showDetails('data')">
      <h3>📊 Data Science</h3>
      <p>Data, ML & AI insights</p>
    </div>
    <div class="domain-box" onclick="showDetails('cyber')">
      <h3>🔒 Cybersecurity</h3>
      <p>Protect & defend systems</p>
    </div>
    <div class="domain-box" onclick="showDetails('ai')">
      <h3>🤖 AI Engineer</h3>
      <p>Deep learning & innovation</p>
    </div>
  </div>

  <!-- Details Section -->
  <div class="details" id="detailsBox">
    <h2 id="domainTitle"></h2>
    <div class="section" onclick="toggleContent('intro')">
      <h3>Introduction</h3>
      <div class="content" id="intro"></div>
    </div>
    <div class="section" onclick="toggleContent('basics')">
      <h3>Basics</h3>
      <div class="content" id="basics"></div>
    </div>
    <div class="section" onclick="toggleContent('projects')">
      <h3>Projects</h3>
      <div class="content" id="projects"></div>
    </div>
  </div>

  <script>
    const roadmapData = {
      web: {
        title: "Web Development",
        intro: "Web Development builds websites and apps. It includes frontend (HTML, CSS, JS), backend (Node.js, PHP), APIs, middleware, and databases.",
        basics: "HTML tags (<div>, <p>, <a>, <img>), CSS styling, JavaScript fundamentals, Git & GitHub.",
        projects: "Portfolio site, Blog platform, E-commerce store, React + Node.js app."
      },
      data: {
        title: "Data Science",
        intro: "Data Science extracts insights from data using Python, statistics, ML, and visualization.",
        basics: "Python, SQL, Statistics, Pandas, Data Visualization.",
        projects: "Customer churn analysis, Kaggle competition, Predictive modeling, Dashboard."
      },
      cyber: {
        title: "Cybersecurity",
        intro: "Cybersecurity protects systems and networks. It covers networking, Linux, firewalls, cryptography, and cloud security.",
        basics: "Networking fundamentals, Linux basics, Firewalls, IDS, Cryptography.",
        projects: "Penetration testing lab, Security audit, Incident response simulation."
      },
      ai: {
        title: "AI Engineer",
        intro: "AI Engineering builds intelligent systems using ML and deep learning frameworks.",
        basics: "Python, ML algorithms, Neural Networks, TensorFlow/PyTorch.",
        projects: "Image classifier, Chatbot, Recommendation system, GAN for images."
      }
    };

    function showDetails(domain) {
      const data = roadmapData[domain];
      document.getElementById("domainTitle").innerText = data.title;
      document.getElementById("intro").innerText = data.intro;
      document.getElementById("basics").innerText = data.basics;
      document.getElementById("projects").innerText = data.projects;
      document.getElementById("detailsBox").style.display = "block";
      document.getElementById("detailsBox").scrollIntoView({behavior: "smooth"});
    }

    function toggleContent(section) {
      const contentDiv = document.getElementById(section);
      contentDiv.style.display = contentDiv.style.display === "block" ? "none" : "block";
    }
  </script>
<!-- Footer -->
<footer>
  <p>© 2026 FutureTrack | Learn. Build. Get Placed.</p>
  <p><a href="index.php">Return to Home</a></p>
</footer>

<style>
  footer {
    background: #0a3d62;       /* Dark blue background */
    color: #fff;               /* White text */
    text-align: center;
    padding: 20px;
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

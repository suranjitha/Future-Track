<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FutureTrack - Target Job</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #fdfbfb, #ebedee);
      margin: 0;
      color: #333;
    }

    nav {
      background: #0a3d62;
      padding: 15px;
      display: flex;
      justify-content: center;
    }
    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 20px;
      font-weight: bold;
    }
    nav a:hover { color: #1abc9c; }

    .hero {
      background: #ffffffcc;
      padding: 40px;
      text-align: center;
      margin: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
      animation: fadeIn 1s ease-in;
    }
    .hero h1 { color: #0a3d62; margin-bottom: 10px; }
    .hero p { font-style: italic; color: #555; }

    .form-box {
      max-width: 700px;
      margin: 30px auto;
      background: #fff;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }
    label { display: block; margin: 10px 0 5px; font-weight: bold; }
    select, input[type="text"], button {
      width: 100%; padding: 12px; margin-bottom: 15px;
      border: 1px solid #ccc; border-radius: 6px;
    }
    button {
      background: #1abc9c; color: #fff; border: none; cursor: pointer;
      transition: background 0.3s;
    }
    button:hover { background: #16a085; }

    .results {
      max-width: 900px;
      margin: 30px auto;
      display: none;
      animation: slideUp 0.6s ease;
    }
    .card {
      background: #ffffffcc;
      padding: 20px;
      margin: 15px 0;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.2);
    }
    .card h3 { color: #0a3d62; margin-bottom: 10px; }
    .skills { display: flex; flex-wrap: wrap; gap: 10px; }
    .tag {
      padding: 8px 14px;
      border-radius: 20px;
      font-size: 14px;
    }
    .required { background: #3498db; color: #fff; }
    .recommended { background: #2ecc71; color: #fff; }

    @keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
    @keyframes slideUp { from {transform:translateY(30px); opacity:0;} to {transform:translateY(0); opacity:1;} }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <a href="index.php">Home</a>
    <a href="targetjob.php">Target Job</a>
    <a href="roadmap.php">Roadmap</a>
    <a href="interview.php">Interview Prep</a>
    <a href="resume.php">Resume</a>
  </nav>

  <!-- Hero -->
  <div class="hero">
    <h1>Set Your Target Job</h1>
    <p>"Define your career goal and see the path ahead."</p>
  </div>

  <!-- Form -->
  <div class="form-box">
    <label for="role">Choose Job Role:</label>
    <select id="role">
      <option value="web">Web Developer</option>
      <option value="data">Data Scientist</option>
      <option value="cyber">Cybersecurity Analyst</option>
      <option value="ai">AI Engineer</option>
    </select>

    <label for="company">Company (Optional):</label>
    <input type="text" id="company" placeholder="e.g. Infosys">

    <button onclick="generateResults()">Generate Roadmap</button>
  </div>

  <!-- Results -->
  <div class="results" id="results">
    <div class="card">
      <h3>Required Skills</h3>
      <div class="skills" id="requiredSkills"></div>
    </div>
    <div class="card">
      <h3>Recommended Skills</h3>
      <div class="skills" id="recommendedSkills"></div>
    </div>
    <div class="card">
      <h3>Next Step</h3>
      <p><a href="roadmap.php">View Roadmap for this Role</a></p>
    </div>
  </div>

  <script>
    const skillsData = {
      web: {
        required: ["HTML","CSS","JavaScript","React","Node.js","Git"],
        recommended: ["Projects on GitHub","Communication","Teamwork","Problem Solving"]
      },
      data: {
        required: ["Python","SQL","Statistics","Machine Learning","Pandas","Visualization"],
        recommended: ["Kaggle Projects","Critical Thinking","Storytelling with Data"]
      },
      cyber: {
        required: ["Networking","Linux","Firewalls","Cryptography","Cloud Security"],
        recommended: ["Ethical Hacking Labs","Incident Response","Security Certifications"]
      },
      ai: {
        required: ["Python","ML Algorithms","Neural Networks","TensorFlow","PyTorch"],
        recommended: ["AI Projects","Mathematical Foundations","Research Papers"]
      }
    };

    function generateResults() {
      const role = document.getElementById("role").value;
      const data = skillsData[role];

      const requiredDiv = document.getElementById("requiredSkills");
      requiredDiv.innerHTML = "";
      data.required.forEach(s => requiredDiv.innerHTML += `<span class="tag required">${s}</span>`);

      const recommendedDiv = document.getElementById("recommendedSkills");
      recommendedDiv.innerHTML = "";
      data.recommended.forEach(s => recommendedDiv.innerHTML += `<span class="tag recommended">${s}</span>`);

      document.getElementById("results").style.display = "block";
      document.getElementById("results").scrollIntoView({behavior:"smooth"});
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

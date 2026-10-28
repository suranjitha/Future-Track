<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FutureTrack - Interview Prep</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg,#fdfbfb,#ebedee);
      margin:0;
      color:#333;
    }

    nav {
      background:#0a3d62;
      padding:15px;
      display:flex;
      justify-content:center;
    }
    nav a {
      color:#fff;
      text-decoration:none;
      margin:0 20px;
      font-weight:bold;
    }
    nav a:hover { color:#1abc9c; }

    .hero {
      background:#fff;
      padding:40px;
      text-align:center;
      margin:20px;
      border-radius:12px;
      box-shadow:0 4px 15px rgba(0,0,0,0.1);
      animation: fadeIn 1s ease-in;
    }
    .hero h1 { color:#0a3d62; margin-bottom:10px; }
    .hero p { font-style:italic; color:#555; }

    .form-box {
      max-width:700px;
      margin:30px auto;
      background:#fff;
      padding:30px;
      border-radius:12px;
      box-shadow:0 6px 15px rgba(0,0,0,0.1);
    }
    label { display:block; margin:10px 0 5px; font-weight:bold; }
    select, button {
      width:100%; padding:12px; margin-bottom:15px;
      border:1px solid #ccc; border-radius:6px;
    }
    button {
      background:#1abc9c; color:#fff; border:none; cursor:pointer;
      transition:background 0.3s;
    }
    button:hover { background:#16a085; }

    .question-box {
      max-width:900px;
      margin:30px auto;
      background:#fff;
      padding:30px;
      border-radius:12px;
      box-shadow:0 6px 15px rgba(0,0,0,0.1);
      display:none;
      animation: slideUp 0.6s ease;
    }
    .question-box h2 { color:#0a3d62; margin-bottom:15px; }

    .question {
      background:#f9f9f9;
      padding:15px;
      margin:10px 0;
      border-radius:8px;
      cursor:pointer;
      transition:background 0.3s;
    }
    .question:hover { background:#eef6ff; }
    .answer {
      display:none;
      margin-top:10px;
      color:#444;
      animation: fadeIn 0.5s ease;
    }

    footer {
      background:#0a3d62;
      color:#fff;
      text-align:center;
      padding:20px;
      margin-top:40px;
    }
    footer a {
      color:#1abc9c;
      text-decoration:none;
      font-weight:bold;
    }
    footer a:hover { color:#16a085; }

    @keyframes fadeIn { from {opacity:0;} to {opacity:1;} }
    @keyframes slideUp { from {transform:translateY(30px); opacity:0;} to {transform:translateY(0); opacity:1;} }
  </style>
</head>
<body>

  <!-- Navigation -->
  <nav>
    <a href="index.php">Home</a>
    <a href="job.php">Target Job</a>
    <a href="roadmap.php">Roadmap</a>
    <a href="interview.php">Interview Prep</a>
    <a href="resume.php">Resume</a>
  </nav>

  <!-- Hero -->
  <div class="hero">
    <h1>Ace Your Interviews</h1>
    <p>"Practice company‑specific questions and prepare with confidence."</p>
  </div>

  <!-- Company Selector -->
  <div class="form-box">
    <label for="company">Choose Company:</label>
    <select id="company">
      <option value="google">Google</option>
      <option value="infosys">Infosys</option>
      <option value="tcs">TCS</option>
      <option value="amazon">Amazon</option>
    </select>
    <button onclick="showCompanyQuestions()">Show Questions</button>
  </div>

  <!-- Questions -->
  <div class="question-box" id="companyQuestions">
    <h2 id="companyTitle"></h2>
    <div id="questions"></div>
  </div>

  <!-- Footer -->
  <footer>
    <p>© 2026 FutureTrack | Learn. Build. Get Placed.</p>
    <p><a href="index.php">Return to Home</a></p>
  </footer>

  <script>
    const companyData = {
      google: [
        {q:"Explain Big-O notation.", a:"Big-O describes algorithm complexity in terms of input size."},
        {q:"Design a scalable URL shortener.", a:"Discuss hashing, database design, and scalability."},
        {q:"What is the difference between TCP and UDP?", a:"TCP is reliable and connection-oriented, UDP is faster but connectionless."}
      ],
      infosys: [
        {q:"What is polymorphism in OOP?", a:"Polymorphism allows methods to behave differently based on input."},
        {q:"Explain SDLC models.", a:"Waterfall, Agile, Spiral, V-Model etc."},
        {q:"What is the difference between C and Java?", a:"C is procedural, Java is object-oriented."}
      ],
      tcs: [
        {q:"What is normalization in DBMS?", a:"Process of organizing data to reduce redundancy."},
        {q:"Explain difference between primary key and foreign key.", a:"Primary key uniquely identifies records, foreign key links tables."},
        {q:"What is cloud computing?", a:"Delivery of computing services over the internet."}
      ],
      amazon: [
        {q:"Tell me about a time you solved a conflict.", a:"Use STAR method: Situation, Task, Action, Result."},
        {q:"How would you design an inventory system?", a:"Discuss database schema, APIs, scalability."},
        {q:"What are Amazon's leadership principles?", a:"Customer obsession, ownership, invent & simplify, etc."}
      ]
    };

    function showCompanyQuestions() {
      const company = document.getElementById("company").value;
      const data = companyData[company];
      document.getElementById("companyTitle").innerText = company.toUpperCase() + " Interview Questions";
      const container = document.getElementById("questions");
      container.innerHTML = "";
      data.forEach(item => {
        container.innerHTML += `
          <div class="question" onclick="toggleAnswer(this)">
            <strong>${item.q}</strong>
            <div class="answer">${item.a}</div>
          </div>
        `;
      });
      document.getElementById("companyQuestions").style.display = "block";
      document.getElementById("companyQuestions").scrollIntoView({behavior:"smooth"});
    }

    function toggleAnswer(el) {
      const ans = el.querySelector(".answer");
      ans.style.display = ans.style.display === "block" ? "none" : "block";
    }
  </script>

</body>
</html>

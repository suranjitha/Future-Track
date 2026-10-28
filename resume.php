<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FutureTrack - Resume Analyzer</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f7fb; color: #333; }
    nav { background: #0a3d62; padding: 20px; display: flex; justify-content: center; }
    nav a { color: #fff; text-decoration: none; margin: 0 20px; font-weight: bold; }
    nav a:hover { color: #1abc9c; }

    .resume-analyzer { max-width: 700px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 15px rgba(0,0,0,0.1); }
    .resume-analyzer h2 { text-align: center; margin-bottom: 20px; color: #0a3d62; }
    label { display: block; margin: 10px 0 5px; font-weight: bold; }
    input[type="file"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 15px; }
    input[type="submit"] { width: 100%; padding: 12px; background: #1abc9c; border: none; border-radius: 6px; color: #fff; font-size: 16px; cursor: pointer; }
    input[type="submit"]:hover { background: #16a085; }

    .results { margin-top: 30px; padding: 20px; background: #ecf0f1; border-radius: 10px; }
    .results h3 { color: #0a3d62; margin-bottom: 15px; }

    .progress { background: #ddd; border-radius: 20px; overflow: hidden; margin: 15px 0; }
    .progress-bar { height: 20px; background: #1abc9c; text-align: center; color: #fff; font-size: 12px; line-height: 20px; }

    .skills { display: flex; flex-wrap: wrap; gap: 8px; margin-top: 10px; }
    .tag { padding: 6px 12px; border-radius: 20px; font-size: 14px; }
    .matched { background: #2ecc71; color: #fff; }
    .recommended { background: #3498db; color: #fff; }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
  <nav>
    <a href="index.php">Home</a>
    <a href="job.php">Target Job</a>
    <a href="roadmap.php">Roadmap</a>
    <a href="interview.php">Interview Prep</a>
  </nav>

  <!-- Resume Analyzer Form -->
  <div class="resume-analyzer">
    <h2>Upload Your Resume</h2>
    <form method="post" enctype="multipart/form-data">
      <label for="resume">Choose Resume (PDF/DOC):</label>
      <input type="file" name="resume" id="resume" required>
      <input type="submit" value="Analyze Resume">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        // Web Development technical + soft skills
        $required_skills = ["HTML", "CSS", "JavaScript", "React", "Node.js", "PHP", "MySQL"];
        $soft_skills = ["Communication", "Teamwork", "Problem Solving", "Project Experience"];

        // Simulated resume text (replace with parser later)
        $resume_text = "HTML, CSS, JavaScript, PHP, Communication"; 
        $user_skills = array_map('trim', explode(",", $resume_text));

        $matched = array_intersect(array_merge($required_skills, $soft_skills), $user_skills);
        $percentage = (count($matched) / (count($required_skills) + count($soft_skills))) * 100;

        $recommended = array_diff(array_merge($required_skills, $soft_skills), $user_skills);

        echo '<div class="results">';
        echo "<h3>Resume Analysis Result</h3>";

        // Progress Bar
        echo '<div class="progress"><div class="progress-bar" style="width:' . round($percentage) . '%;">' . round($percentage) . '%</div></div>';

        echo "<h3>Matched Skills</h3><div class='skills'>";
        foreach ($matched as $skill) { echo "<span class='tag matched'>$skill</span>"; }
        echo "</div>";

        echo "<h3>Recommended Skills & Improvements</h3><div class='skills'>";
        foreach ($recommended as $skill) { echo "<span class='tag recommended'>$skill</span>"; }
        echo "</div>";

        // Verdict
        if ($percentage >= 70) {
            echo "<p><strong>Verdict:</strong> This resume is strong for Web Development roles.</p>";
        } else {
            echo "<p><strong>Verdict:</strong> Resume needs improvement for Web Development. Add recommended skills and highlight projects to boost chances.</p>";
        }

        // Extra advice
        echo "<h3>Tips</h3>";
        echo "<p>- Add real web projects (portfolio, GitHub links).</p>";
        echo "<p>- Highlight teamwork and communication in project descriptions.</p>";
        echo "<p>- Mention problem-solving examples (debugging, optimization).</p>";

        echo '</div>';
    }
    ?>
  </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

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
    padding: 10px;
    margin-top: 30px;
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

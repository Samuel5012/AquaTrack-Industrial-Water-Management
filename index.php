<?php
require "db.php";
$message="";
if($_SERVER["REQUEST_METHOD"]==="POST"){
 $name=trim($_POST["name"]??""); $area=trim($_POST["area"]??"");
 $issue=trim($_POST["issue"]??""); $description=trim($_POST["description"]??"");
 if($name && $area && $issue && $description){
  $stmt=$conn->prepare("INSERT INTO issue_reports(name,area,issue_type,description) VALUES(?,?,?,?)");
  $stmt->bind_param("ssss",$name,$area,$issue,$description);
  $message=$stmt->execute() ? "Report saved successfully. ID: ".$stmt->insert_id : "Could not save report.";
  $stmt->close();
 } else {$message="Please complete all fields.";}
}
$u=$conn->query("SELECT COALESCE(SUM(litres_used),0) total FROM water_usage WHERE usage_date=CURDATE()")->fetch_assoc()["total"];
$s=$conn->query("SELECT COALESCE(SUM(litres_saved),0) total FROM water_usage WHERE usage_date=CURDATE()")->fetch_assoc()["total"];
$o=$conn->query("SELECT COUNT(*) total FROM issue_reports WHERE status<>'Resolved'")->fetch_assoc()["total"];
?>
<!DOCTYPE html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>AquaTrack Stage 2</title><link rel="stylesheet" href="style.css"></head>
<body>
<header class="navbar"><div class="logo">💧 AquaTrack</div><nav><a href="index.php">Home</a><a href="#dashboard">Dashboard</a><a href="#report">Report Leak</a><a href="reports.php">Reports</a></nav></header>
<section class="hero"><div><p class="tag">DYNAMIC INDUSTRIAL WATER MANAGEMENT</p><h1>Monitor Water. Reduce Waste. Improve Operations.</h1><p class="hero-text">Stage 2 uses PHP and MySQL to process and store industrial water issue reports.</p><a class="btn primary" href="#dashboard">View Dashboard</a></div><div class="water-card"><div class="water-icon">💧</div><h3>Efficiency Status</h3><div class="big-number">72%</div><p>Stage 2 dynamic application</p></div></section>
<?php if($message): ?><div class="db-message"><?php echo htmlspecialchars($message); ?></div><?php endif; ?>
<section id="dashboard" class="section"><div class="section-title"><p class="tag">MYSQL DASHBOARD</p><h2>Industrial Water Dashboard</h2></div>
<div class="cards"><div class="card"><h3>🚰 Water Used</h3><p class="metric"><?php echo number_format($u); ?> L</p></div><div class="card"><h3>📉 Water Saved</h3><p class="metric"><?php echo number_format($s); ?> L</p></div><div class="card"><h3>⚠️ Open Issues</h3><p class="metric"><?php echo $o; ?></p></div></div></section>
<section id="report" class="section light"><div class="form-wrap"><div><p class="tag">DATABASE ACTION</p><h2>Report a Water Issue</h2><p>This form sends data to PHP and stores it in MySQL.</p></div>
<form method="POST"><label>Your Name</label><input name="name" required><label>Area / Department</label><input name="area" required><label>Issue Type</label><select name="issue" required><option value="">Select issue</option><option>Water Leak</option><option>Abnormal Consumption</option><option>Damaged Pipe</option></select><label>Description</label><textarea name="description" rows="4" required></textarea><button class="btn primary">Save Report to Database</button></form></div></section>
<footer><p>© 2026 AquaTrack | Samuel Chinokopota | 24CS257</p></footer></body></html>
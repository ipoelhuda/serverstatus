<pre>

<strong>System Information:</strong>
<?php system("uname -a"); ?>
<br />
<strong>Uptime:</strong>
<?php system("uptime"); ?>
<br />
<strong>CPU Information:</strong>
<?php system("cat /proc/cpuinfo | grep \"model name\\|processor\""); ?>
<br />
<strong>Memory Usage (MB):</strong>
<?php system("free -m"); ?>
<br />
<strong>Disk Usage:</strong>
<?php system("df -h"); ?>
<br />
<strong>Network Information:</strong>
<?php system ("vnstat"); ?>
<br />

</pre>

<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

while (true) {
  $data = [
	'name' => 'Rasmus Lerdorf'
  ];

  echo "event: sse\n";
  echo "data: " . json_encode($data) . "\n\n";
  echo str_pad('', 4096) . "\n";

  ob_flush();
  flush();
  sleep(1);

  if (connection_aborted()) {
	break;
  }
}
ob_end_flush();
<?php
header("Content-Type: text/event-stream");

$id = $_COOKIE["serc"];
if($id) {
  while (1) {
    echo 'data: ' . $message, "\n\n";

    // Flush the output buffer.
    while (ob_get_level() > 0) {
      ob_end_flush();
    }
    flush();

    // break the loop if the client aborted the connection (closed the page).
    if (connection_aborted()) break;

    // sleep for 1 second before running the loop again
    sleep(1);
  }
}

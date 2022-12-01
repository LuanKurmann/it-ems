<?php
session_start();
session_destroy();
header('Location: ' . URL_SUBFOLDER);

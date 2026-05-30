<?php
require_once 'config/database.php';
startSession();
if (isLoggedIn()) {
    header('Location: ' . BASE_URL . (isAdmin() ? '/admin/dashboard.php' : '/user/dashboard.php'));
} else {
    header('Location: ' . BASE_URL . '/auth/login.php');
}
exit;

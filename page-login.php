<?php
get_header();

?>

    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Login</button>
        </form>
        <p id="message"></p>
    </div>
    


<?php
get_footer();
?>
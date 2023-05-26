<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>404</h1>
            <h3>Page not found</h3>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Back to Homepage</a>
        </div>
    </div>
</div>

<style>
    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .row {
        text-align: center;
    }
    .col {
        padding: 20px;
        border-radius: 10px;
        background-color: #f18080;
        width: 700px;
        height: 700px;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    h1{
        font-size: 150px;
        color: black;
    }

    h3{
        font-size: 50px;
        color: black;
    }
    
    .btn {
        margin-top: 20px;
        padding: 10px 20px;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }
</style>

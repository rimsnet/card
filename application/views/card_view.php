<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
            <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
            <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
            <script src="https://unpkg.com/react-bootstrap@next/dist/react-bootstrap.min.js" crossorigin></script>
            <link rel="stylesheet" 
                href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
                integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
            <script type="text/babel" src="<?php echo base_url(); ?>js/custom.js"></script>
            <title>Card Game</title>
        </head>
        <body>
            <div id="mydiv"></div>
        </body>
    </html>
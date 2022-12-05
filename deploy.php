 <?php
    # webhook for project deployment
    if ($_GET['token'] === 'secret_key') {
        $cmd = shell_exec(" git clone https://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@github.com/tesing032/new-repo.git ");
        echo $cmd;
        echo 'Deployment sucess';
    } else {
        echo 'Error';
    }
    ?>
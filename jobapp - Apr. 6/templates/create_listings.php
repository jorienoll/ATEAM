<?php include 'inc/header.php'; ?>
      <div class="jumbotron">
        <h1 class="display-4">Create a Listing</h1>
        <br>
        <p class="lead">start connecting today</p>
        <form method = "GET" action = "index.php">
          <select name= "category" class = "form-control">
            <option value = "0" > Choose Category </option>
            <?php foreach($Job_Opening as $category): ?>
              <option value = "<?php echo $category->Opening_ID; ?>"><?php echo $category->Opening_ID; ?></option>
            <?php endforeach; ?>


          </select>
          <br><br><br>
          <input type = "submit" class ="btn btn-lg btn-success" value = "Find">


        </form>
      </div>

     
        <?php foreach($jobs as $job): ?>
        <div class="row marketing">
            <div class="col-md-10">
              <h4><?php echo $job->c_name; ?></h4>
              <p><?php echo $job->Description; ?></p>
              <p><?php echo $job->Status; ?></p>
              <p><?php echo $job->c_add; ?></p>


            </div>
            <div class = "col-md-2">
                    <a class = "btn btn-default" href = "#">View</a>
            </div>
        </div>
        <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>

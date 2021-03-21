<form class="row g-3" method="POST" action="/main/add_task">
  <div class="col-md-6">
    <label for="inputEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" name="name">
  </div>
  <div class="col-12">
    <label for="inputText" class="form-label">Task</label>
    <textarea class="form-control" id="inputText" name="task" rows="3"></textarea>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>

<?php if (isset($data)) : ?>
  <div class="row">
    <?php foreach ($data as $item) : ?>
      <div class="card text-center" style="max-width: 50rem">
        <div class="card-body">
          <h5 class="card-title">
            <?echo $item['name'];?>
          </h5>
          <h6 class="card-subtitle mb-2 text-muted">
            <?echo $item['email'];?>
          </h6>
          <p class="card-text">
            <?echo $item['task'];?>
          </p>
         
          <input class="form-check-input" type="checkbox" <?php if($item['edit']){echo"checked";}?>  id="defaultCheck2" disabled>
            <label class="form-check-label" for="defaultCheck2">
              Edited
            </label>
         
         
            <input class="form-check-input" type="checkbox" <?php if($item['done']){echo"checked";}?>  id="defaultCheck2" disabled>
            <label class="form-check-label" for="defaultCheck2">
              Task accomplished
            </label>
          
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
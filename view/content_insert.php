<form id="insertForm" method="POST" action="controller/insert_controller.php">
            <!-- location attributes -->
    <div class="form-group">
        <input type="text" class="form-control" name="city" id="city" placeholder="City">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="ZIP code">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="addr" id="addr" placeholder="Addresse">
    </div>
    <div><button type="submit" value="add" id="add" name="add" class="btn btn-primary">Insert location</button>
</form>

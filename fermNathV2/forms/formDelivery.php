<form action="" method="post">
    <div class="mb-3">
        <label for="titled" class="form-label">Intitulé</label>
        <input type="text" class="form-control" id="titled" name="titled" value="<?= !empty($resultDeliveryUpd) ? $resultDeliveryUpd['name'] : ''; ?>">
    </div>
    <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <button type="submit" class="btn btn-success">Valider</button>
</form>
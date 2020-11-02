<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <form action="/admin/edit/<?php echo $data['id']; ?>" method="post">
                            <div class="form-group">
                                <label>Название товара</label>
                                <input class="form-control" type="text" name="name" value="<?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?>">
                            </div>
                            <div class="form-group">
                                <label>Показания</label>
                                <textarea class="form-control" rows="3" name="indication"><?php echo htmlspecialchars($data['indication'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Противопоказания</label>
                                <textarea class="form-control" rows="3" name="contraindications"><?php echo htmlspecialchars($data['contraindications'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Состав</label>
                                <textarea class="form-control" rows="3" name="composition"><?php echo htmlspecialchars($data['composition'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Способ применения</label>
                                <textarea class="form-control" rows="3" name="application"><?php echo htmlspecialchars($data['application'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Особые указания</label>
                                <textarea class="form-control" rows="3" name="spec_instructions"><?php echo htmlspecialchars($data['spec_instructions'], ENT_QUOTES); ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Цена</label>
                                <input class="form-control" type="text" name="price" value="<?php echo htmlspecialchars($data['price'], ENT_QUOTES); ?>" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                            </div>
                            <div class="form-group">
                                <label>Изображение</label>
                                <input class="form-control" type="file" name="img">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Добавить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form method="POST" action="<?= base_url('user/add') ?>">

<div class="card rounded-lg">
        <div class="card-header">Form Data User</div>
        <div class="card-body">            
            <div class="form-row">

                <div class="col-lg-12 row">
                    <label class="col-md-2">Name *</label>
                    <div class="col-md-6">
                        <div class="form-group <?=form_error('fullname') ? 'has-error' : null?>">
                        <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control">
                        <?=form_error('fullname')?>
                        </div>
                    </div>                        
                </div>

                <div class="col-lg-12 row">
                    <label class="col-md-2">Username *</label>
                    <div class="col-md-6">
                        <div class="form-group <?=form_error('username') ? 'has-error' : null?>">
                        <input type="text" name="username" value="<?=set_value('username')?>" class="form-control">
                        <?=form_error('username')?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Password *</label>
                    <div class="form-group <?=form_error('password') ? 'has-error' : null?>">
                        <div class="col-md-auto">
                        <input type="password" name="password" value="<?=set_value('password')?>" class="form-control">
                        <?=form_error('password')?>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 row">
                    <label class="col-md-2">Password Confirmation *</label>
                    <div class="col-md-6">
                        <div class="form-group <?=form_error('passconf') ? 'has-error' : null?>">
                        <input type="password" name="passconf" value="<?=set_value('passconf')?>" class="form-control">
                        <?=form_error('passconf')?>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-12 row">
                    <label class="col-md-2 ">Address</label>
                    <div class="col-md-6">
                        <div class="form-group <?=form_error('address') ? 'has-error' : null?>">
                        <textarea name="address" class="form-control"><?=set_value('address')?></textarea>
                        <?=form_error('address')?>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12 row">
                    <label class="col-md-2">Level *</label>
                    <div class="col-md-6">
                        <div class="form-group <<?=form_error('level') ? 'has-error' : null?>">
                        <select name="level" class="form-control">

                            <option value="">- Pilih -</option>
                            <option value="1" <?=set_value('level') == 1 ? "selected" : null?>>Admin</option>
                            <option value="2" <?=set_value('level') == 2 ? "selected" : null?>>Admin2</option>

                        </select>
                    <?=form_error('level')?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary mt-4">Tambah</button>
            <button type="reset" class="btn btn-danger mt-4">Reset</button>
        </div>
    </div>
</form>
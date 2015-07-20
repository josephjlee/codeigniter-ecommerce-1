<div class="row">
    <div class="col-lg-12">
        <form method="post" action="<?php echo site_url('admin/general/save'); ?>">
            <section class="panel">
                <header class="panel-heading"><span class="h4">Date generale</span></header>
                <div class="panel-body">
                    <div class="form-group">
                        <label>Text pentru logo *</label>
                        <input name="General[logo_text]" value="<?php echo !empty($general->logo_text) ? $general->logo_text : ''; ?>" type="text" class="form-control" placeholder="Ansilvex" required>
                    </div>
                    <div class="form-group">
                        <label>Logo</label>
                        <input name="General[logo_file]" type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input name="General[telephone]" value="<?php echo !empty($general->telephone) ? $general->telephone : ''; ?>" type="text" class="form-control" placeholder="022 35 22 23">
                    </div>
                    <div class="form-group">
                        <label>Mobil</label>
                        <input name="General[mobile]" value="<?php echo !empty($general->mobile) ? $general->mobile : ''; ?>" type="text" class="form-control" placeholder="069 35 22 23">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input name="General[email]" value="<?php echo !empty($general->email) ? $general->email : ''; ?>" type="text" class="form-control" placeholder="info@ansilvex.md" required>
                    </div>
                    <div class="form-group">
                        <label>Link Facebook</label>
                        <input name="General[link_facebook]" value="<?php echo !empty($general->link_facebook) ? $general->link_facebook : ''; ?>" type="text" class="form-control" placeholder="https://www.facebook.com/TED">
                    </div>
                    <div class="form-group">
                        <label>Link Google+</label>
                        <input name="General[link_google]" value="<?php echo !empty($general->link_google) ? $general->link_google : ''; ?>" type="text" class="form-control" placeholder="https://plus.google.com/+TED">
                    </div>
                    <div class="form-group">
                        <label>Link Linkedin</label>
                        <input name="General[link_linkedin]"  value="<?php echo !empty($general->link_linkedin) ? $general->link_linkedin : ''; ?>"type="text" class="form-control" placeholder="https://www.linkedin.com/company/610087">
                    </div>
                </div>
                <footer class="panel-footer text-right bg-light lter">
                    <button type="submit" class="btn btn-success btn-s-xs">Salveaza</button>
                </footer>
            </section>
        </form>
    </div>
</div>
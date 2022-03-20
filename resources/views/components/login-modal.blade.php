<div class="modal fade py-5"  tabindex="-1" aria-hidden="true"
role="dialog" id="modalLogin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-login-tab" data-bs-toggle="tab"
              data-bs-target="#nav-login" type="button" role="tab" aria-controls="nav-login"
              aria-selected="true">Login</button>
              
              <button class="nav-link" id="nav-register-tab" data-bs-toggle="tab" data-bs-target="#nav-register"
              type="button" role="tab" aria-controls="nav-register" aria-selected="false">Registre-se</button>
          </div>
        </nav>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-login" role="tabpanel"
            aria-labelledby="nav-login-tab">
              <div class="modal-body p-5 pt-0">
                <x-login-tab-content/>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-register" role="tabpanel"
            aria-labelledby="nav-register-tab">
              <div class="modal-body p-5 pt-0">
              <x-register-tab-content/>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@extends('layout.userProfile.InformationUser')
@section('sectionshow')
<div class="card mb-4">
    <h5 class="card-header">Connected Accounts</h5>
    <div class="card-body">
      <p>Display content from your connected accounts on your site</p>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/google.png" alt="google" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-9 mb-sm-0 mb-2">
            <h6 class="mb-0">Google</h6>
            <small class="text-muted">Calendar and contacts</small>
          </div>
          <div class="col-3 text-end">
            <label class="switch me-0">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/slack.png" alt="slack" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-9 mb-sm-0 mb-2">
            <h6 class="mb-0">Slack</h6>
            <small class="text-muted">Communication</small>
          </div>
          <div class="col-3 text-end">
            <label class="switch me-0">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/github.png" alt="github" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-9 mb-sm-0 mb-2">
            <h6 class="mb-0">Github</h6>
            <small class="text-muted">Manage your Git repositories</small>
          </div>
          <div class="col-3 text-end">
            <label class="switch me-0">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/mailchimp.png" alt="mailchimp" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-9 mb-sm-0 mb-2">
            <h6 class="mb-0">Mailchimp</h6>
            <small class="text-muted">Email marketing service</small>
          </div>
          <div class="col-3 text-end">
            <label class="switch me-0">
              <input type="checkbox" class="switch-input" checked />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
        </div>
      </div>
      <div class="d-flex">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/asana.png" alt="asana" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-9 mb-sm-0 mb-2">
            <h6 class="mb-0">Asana</h6>
            <small class="text-muted">Communication</small>
          </div>
          <div class="col-3 text-end">
            <label class="switch me-0">
              <input type="checkbox" class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on">
                  <i class="bx bx-check"></i>
                </span>
                <span class="switch-off">
                  <i class="bx bx-x"></i>
                </span>
              </span>
              <span class="switch-label"></span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Connected Accounts -->

  <!-- Social Accounts -->
  <div class="card mb-4">
    <h5 class="card-header">Social Accounts</h5>
    <div class="card-body">
      <p>Display content from social accounts on your site</p>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/facebook.png" alt="facebook" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-8 col-sm-7 mb-sm-0 mb-2">
            <h6 class="mb-0">Facebook</h6>
            <small class="text-muted">Not Connected</small>
          </div>
          <div class="col-4 col-sm-5 text-end">
            <button type="button" class="btn btn-icon btn-label-secondary">
              <i class='bx bx-link-alt'></i>
            </button>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/twitter.png" alt="twitter" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-8 col-sm-7 mb-sm-0 mb-2">
            <h6 class="mb-0">Twitter</h6>
            <a href="https://twitter.com/Theme_Selection" target="_blank">@ThemeSelection</a>
          </div>
          <div class="col-4 col-sm-5 text-end">
            <button type="button" class="btn btn-icon btn-label-danger">
              <i class='bx bx-trash-alt'></i>
            </button>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/instagram.png" alt="instagram" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-8 col-sm-7 mb-sm-0 mb-2">
            <h6 class="mb-0">instagram</h6>
            <a href="https://www.instagram.com/themeselection/" target="_blank">@ThemeSelection</a>
          </div>
          <div class="col-4 col-sm-5 text-end">
            <button type="button" class="btn btn-icon btn-label-danger">
              <i class='bx bx-trash-alt'></i>
            </button>
          </div>
        </div>
      </div>
      <div class="d-flex mb-3">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/dribbble.png" alt="dribbble" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-8 col-sm-7 mb-sm-0 mb-2">
            <h6 class="mb-0">Dribbble</h6>
            <small class="text-muted">Not Connected</small>
          </div>
          <div class="col-4 col-sm-5 text-end">
            <button type="button" class="btn btn-icon btn-label-secondary">
              <i class='bx bx-link-alt'></i>
            </button>
          </div>
        </div>
      </div>
      <div class="d-flex">
        <div class="flex-shrink-0">
          <img src="../../assets/img/icons/brands/behance.png" alt="behance" class="me-3" height="30">
        </div>
        <div class="flex-grow-1 row">
          <div class="col-8 col-sm-7 mb-sm-0 mb-2">
            <h6 class="mb-0">Behance</h6>
            <small class="text-muted">Not Connected</small>
          </div>
          <div class="col-4 col-sm-5 text-end">
            <button type="button" class="btn btn-icon btn-label-secondary">
              <i class='bx bx-link-alt'></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Social Accounts -->
</div>
@endsection
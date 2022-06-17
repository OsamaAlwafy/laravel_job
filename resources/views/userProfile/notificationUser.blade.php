@extends('layout.userProfile.InformationUser')
@section('sectionshow')
<div class="card mb-4">
    <!-- Notifications -->
    <div class="card-header">
      <h5 class="card-title">Recent Devices</h5>
      <span class="card-subtitle">Change to notification settings, the user will get the update</span>
    </div>
    <div class="table-responsive">
      <table class="table border-top table-striped">
        <thead>
          <tr>
            <th class="text-nowrap">Type</th>
            <th class="text-nowrap text-center">✉️ Email</th>
            <th class="text-nowrap text-center">🖥 Browser</th>
            <th class="text-nowrap text-center">👩🏻‍💻 App</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-nowrap">New for you</td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-nowrap">Account activity</td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-nowrap">A new browser used to sign in</td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck9" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-nowrap">A new device is linked</td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck11" />
              </div>
            </td>
            <td>
              <div class="form-check d-flex justify-content-center">
                <input class="form-check-input" type="checkbox" id="defaultCheck12" />
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="card-body">
      <button type="submit" class="btn btn-primary me-2">Save changes</button>
      <button type="reset" class="btn btn-label-secondary">Discard</button>
    </div>
    <!-- /Notifications -->
  </div>
  @endsection
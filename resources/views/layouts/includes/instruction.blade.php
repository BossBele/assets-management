<div class="col-md-12">
    <div class="alert" style="background-color: #EAF2F8; border: 1px solid #ffc107;">
        <div class="p-0" style="display: flex; align-items:left">
            <i class="fas fa-info-circle p-1 ml-0"></i>
            <span class="">
                Hi {{ Auth::user()->name }}, welcome to ICAP practical interview. Follow the instructions below to get
                started
            </span>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-list"></i>
                Instructions
            </h3>
        </div>

        <div class="card-body">
            <p>
                This is the asset management system which is used to manage company's assets. Basically system enables
                ICAP staff to
                store asset in a system, view asset details, update asset details and remove asset from the system.
                Some parts of this system have broken and system does not perform some basic functionalities.

                Your tasked to debug the system so that it can enable user to perform the below functionalities
            </p>
            <ol>
                <li>Run database seeder to store asset types</li>
                <li>User should be able store asset in a database</li>
                <li>User should be able to view asset details </li>
                <li>User should be able to update asset details</li>
                <li>User should be able to remove asset from the database</li>
            </ol>

            <label for="">NOTE</label>
            <p>Use git to commit any fix that you are performing on a system</p>
        </div>
    </div>
</div>

@extends('layouts.app')
@push('page-css')
    <link rel="stylesheet" href="{{ asset('css/user/user-profile.css') }}">
@endpush
@section('content')
    <!-- Begin page -->
    <div class="wrapper">
        <div class="page-container">
            <div class="row mt-2">
                <div class="col-xl-12">
                    <div class="card">
                        <div
                            class="card-header border-bottom border-dashed d-flex align-items-center justify-content-between">
                            <h4 class="header-title mb-0">Agent Profile</h4>
                            <a href="{{ route('admin_dashboard') }}" class="btn btn-sm btn-secondary">
                                <i class="ti ti-arrow-back-up"
                                    style="margin-right:3px; font-size: 1.3rem; margin-bottom: 1px"></i>Go Back
                            </a>
                        </div>
                        <div class="card-body">
                            <section>
                                <div class="profile-header">
                                    <div class="profile-cover"></div>

                                    <div class="profile-info-top">
                                        <div class="profile-avatar-section">
                                            <div class="profile-avatar">
                                                <i class="ti ti-building"></i>
                                            </div>
                                            <div class="profile-meta">
                                                <div class="agency-type">Premium Agency</div>
                                                <h1 class="agency-name">Global Recruitment Agency</h1>
                                                <p class="agency-description">Connecting talented professionals with top
                                                    companies worldwide. Specialized in IT, Finance, and Healthcare sectors.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="status-badge">
                                            <i class="ti ti-check-circle-fill"></i>
                                            Active & Verified
                                        </div>
                                    </div>

                                    <!-- Quick Stats -->
                                    <div class="quick-stats">
                                        <div class="stat-card">
                                            <div class="stat-number">2,450</div>
                                            <div class="stat-label">Placements</div>
                                        </div>
                                        <div class="stat-card">
                                            <div class="stat-number">850+</div>
                                            <div class="stat-label">Clients</div>
                                        </div>
                                        <div class="stat-card">
                                            <div class="stat-number">15+</div>
                                            <div class="stat-label">Countries</div>
                                        </div>
                                        <div class="stat-card">
                                            <div class="stat-number">12 yrs</div>
                                            <div class="stat-label">Experience</div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="content-grid">
                                    <!-- Basic Information -->
                                    <div class="info-card">
                                        <div class="info-card-title">
                                            <i class="ti ti-info-circle"></i>
                                            Basic Information
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Owner Name</span>
                                            <span class="info-value">Mr. Abdullah Khan</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Phone Number</span>
                                            <span class="info-value">+880 1800 123456</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Email</span>
                                            <span class="info-value">info@global-rec.com</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Location</span>
                                            <span class="info-value">Dhaka, Bangladesh</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Member Since</span>
                                            <span class="info-value">March 15, 2012</span>
                                        </div>
                                    </div>

                                    <!-- Contact Information -->
                                    <div class="info-card">
                                        <div class="info-card-title">
                                            <i class="ti ti-phone-outgoing"></i>
                                            Contact Information
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">WhatsApp</span>
                                            <span class="info-value">+880 1820 829119</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Website</span>
                                            <span class="info-value">www.globalrec.com</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Social Media</span>
                                            <span class="info-value">
                                                <i class="ti ti-brand-facebook"></i>
                                                <i class="ti ti-brand-linkedin"></i>
                                                <i class="ti ti-brand-twitter"></i>
                                            </span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Point of Contact</span>
                                            <span class="info-value">Ms. Fatima Rahman</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Response Time</span>
                                            <span class="info-value">2-4 hours</span>
                                        </div>
                                    </div>

                                    <!-- Services & Specialization -->
                                    <div class="info-card">
                                        <div class="info-card-title">
                                            <i class="ti ti-briefcase"></i>
                                            Services
                                        </div>
                                        <div class="tags-container">
                                            <span class="tag">Executive Search</span>
                                            <span class="tag">IT Recruitment</span>
                                            <span class="tag">Healthcare</span>
                                            <span class="tag">Finance</span>
                                            <span class="tag">Contract Staff</span>
                                            <span class="tag">Overseas Jobs</span>
                                        </div>
                                    </div>

                                    <!-- Coverage Areas -->
                                    <div class="info-card">
                                        <div class="info-card-title">
                                            <i class="ti ti-map-pin-search"></i>
                                            Coverage Areas
                                        </div>
                                        <ul class="list-items">
                                            <li><i class="ti ti-check"></i> Bangladesh</li>
                                            <li><i class="ti ti-check"></i> India</li>
                                            <li><i class="ti ti-check"></i> UAE</li>
                                            <li><i class="ti ti-check"></i> Saudi Arabia</li>
                                            <li><i class="ti ti-check"></i> Malaysia</li>
                                            <li><i class="ti ti-check"></i> Singapore</li>
                                        </ul>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="full-card">
                                    <div class="card-section-title">
                                        <i class="ti ti-building-bank"></i>
                                        Bank Information
                                    </div>
                                    <div
                                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                                        <div class="info-item"
                                            style="border: none; display: flex; flex-direction: column; align-items: flex-start;">
                                            <span class="info-label">Account Name</span>
                                            <span class="info-value" style="text-align: left; margin-top: 5px;">Global
                                                Recruitment Ltd.</span>
                                        </div>
                                        <div class="info-item"
                                            style="border: none; display: flex; flex-direction: column; align-items: flex-start;">
                                            <span class="info-label">Bank Name</span>
                                            <span class="info-value" style="text-align: left; margin-top: 5px;">Dhaka Bank
                                                Limited</span>
                                        </div>
                                        <div class="info-item"
                                            style="border: none; display: flex; flex-direction: column; align-items: flex-start;">
                                            <span class="info-label">Account Number</span>
                                            <span class="info-value"
                                                style="text-align: left; margin-top: 5px;">1234567890123456</span>
                                        </div>
                                        <div class="info-item"
                                            style="border: none; display: flex; flex-direction: column; align-items: flex-start;">
                                            <span class="info-label">Swift Code</span>
                                            <span class="info-value"
                                                style="text-align: left; margin-top: 5px;">DBBLBDBD</span>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section>
                                <div class="full-card">
                                    <div class="card-section-title">
                                        <i class="ti ti-file"></i>
                                        Documents & License
                                    </div>
                                    <div class="document-grid">
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-pdf"></i></div>
                                            <div class="doc-name">Government License</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Verified</div>
                                        </div>
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-file"></i></div>
                                            <div class="doc-name">Trade License</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Verified</div>
                                        </div>
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-file-certificate"></i></div>
                                            <div class="doc-name">Tax Certificate</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Verified</div>
                                        </div>
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-certificate"></i></div>
                                            <div class="doc-name">ISO Certification</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Valid</div>
                                        </div>
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-report"></i></div>
                                            <div class="doc-name">Company Profile</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Uploaded</div>
                                        </div>
                                        <div class="document-item">
                                            <div class="doc-icon"><i class="ti ti-briefcase"></i></div>
                                            <div class="doc-name">Work Permit</div>
                                            <div class="doc-status"><i class="ti ti-check"></i> Verified</div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="full-card">
                                    <div class="action-buttons">
                                        <button class="btn-custom btn-primary-custom">
                                            <i class="ti ti-pencil"></i> Edit Profile
                                        </button>
                                        <button class="btn-custom btn-primary-custom">
                                            <i class="ti ti-message"></i> Message
                                        </button>
                                        <button class="btn-custom btn-secondary-custom">
                                            <i class="ti ti-download"></i> Download Report
                                        </button>
                                        <button class="btn-custom btn-secondary-custom">
                                            <i class="ti ti-share"></i> Share Profile
                                        </button>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END wrapper -->
@endsection
@push('page-js')
@endpush

<header class="topbar">
    <div class="container-xxl">
        <div class="navbar-header">
            <div class="d-flex align-items-center gap-2">
                <!-- Menu Toggle Button -->
                <div class="topbar-item">
                    <button type="button" class="button-toggle-menu">
                        <iconify-icon
                            icon="iconamoon:menu-burger-horizontal"
                            class="fs-22"
                        ></iconify-icon>
                    </button>
                </div>

                <!-- App Search-->
                <form class="app-search d-none d-md-block me-auto">
                    <div class="position-relative">
                        <input
                            type="search"
                            class="form-control"
                            placeholder="Search..."
                            autocomplete="off"
                            value=""
                        />
                        <iconify-icon
                            icon="iconamoon:search-duotone"
                            class="search-widget-icon"
                        ></iconify-icon>
                    </div>
                </form>
            </div>

            <div class="d-flex align-items-center gap-1">
                <!-- Theme Color (Light/Dark) -->
                <div class="topbar-item">
                    <button
                        type="button"
                        class="topbar-button"
                        id="light-dark-mode"
                    >
                        <iconify-icon
                            icon="iconamoon:mode-dark-duotone"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                    </button>
                </div>

                <!-- Category -->
                <div class="dropdown topbar-item d-none d-lg-flex">
                    <button
                        type="button"
                        class="topbar-button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <iconify-icon
                            icon="iconamoon:apps"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="p-1">
                            <a
                                class="dropdown-item py-2"
                                href="javascript:void(0);"
                            >
                                <img
                                    src="{{ asset('assets/images/brands/github.svg') }}"
                                    class="avatar-xs"
                                    alt="Github"
                                />
                                <span class="ms-2"
                                    >GitHub:
                                    <span class="fw-medium">@reback</span></span
                                >
                            </a>
                            <a
                                class="dropdown-item py-2"
                                href="javascript:void(0);"
                            >
                                <img
                                    src="{{ asset('assets/images/brands/bitbucket.svg') }}"
                                    class="avatar-xs"
                                    alt="bitbucket"
                                />
                                <span class="ms-2"
                                    >Bitbucket:
                                    <span class="fw-medium">@reback</span></span
                                >
                            </a>
                            <a
                                class="dropdown-item py-2"
                                href="javascript:void(0);"
                            >
                                <img
                                    src="{{ asset('assets/images/brands/dribbble.svg') }}"
                                    class="avatar-xs"
                                    alt="dribbble"
                                />
                                <span class="ms-2"
                                    >Dribbble:
                                    <span class="fw-medium"
                                        >@username</span
                                    ></span
                                >
                            </a>

                            <a
                                class="dropdown-item py-2"
                                href="javascript:void(0);"
                            >
                                <img
                                    src="{{ asset('assets/images/brands/dropbox.svg') }}"
                                    class="avatar-xs"
                                    alt="dropbox"
                                />
                                <span class="ms-2"
                                    >Dropbox:
                                    <span class="fw-medium"
                                        >@username</span
                                    ></span
                                >
                            </a>

                            <a
                                class="dropdown-item py-2"
                                href="javascript:void(0);"
                            >
                                <img
                                    src="{{ asset('assets/images/brands/slack.svg') }}"
                                    class="avatar-xs"
                                    alt="mail_chimp"
                                />
                                <span class="ms-2"
                                    >Slack:
                                    <span class="fw-medium">@reback</span></span
                                >
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Notification -->
                <div class="dropdown topbar-item">
                    <button
                        type="button"
                        class="topbar-button position-relative"
                        id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <iconify-icon
                            icon="iconamoon:notification-duotone"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                        <span
                            class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill"
                            >3<span class="visually-hidden"
                                >unread messages</span
                            ></span
                        >
                    </button>
                    <div
                        class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                        aria-labelledby="page-header-notifications-dropdown"
                    >
                        <div
                            class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border"
                        >
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0 fs-16 fw-semibold">
                                        Notifications
                                    </h6>
                                </div>
                                <div class="col-auto">
                                    <a
                                        href="javascript: void(0);"
                                        class="text-dark text-decoration-underline"
                                    >
                                        <small>Clear All</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 280px">
                            <!-- Item -->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item py-3 border-bottom text-wrap"
                            >
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                            class="img-fluid me-2 avatar-sm rounded-circle"
                                            alt="avatar-1"
                                        />
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">
                                            <span class="fw-medium"
                                                >Josephine Thompson </span
                                            >commented on admin panel
                                            <span
                                                >" Wow 😍! this admin looks good
                                                and awesome design"</span
                                            >
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item py-3 border-bottom"
                            >
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-sm me-2">
                                            <span
                                                class="avatar-title bg-soft-info text-info fs-20 rounded-circle"
                                            >
                                                D
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold">
                                            Donoghue Susan
                                        </p>
                                        <p class="mb-0 text-wrap">
                                            Hi, How are you? What about our next
                                            meeting
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item py-3 border-bottom"
                            >
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                            class="img-fluid me-2 avatar-sm rounded-circle"
                                            alt="avatar-3"
                                        />
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold">
                                            Jacob Gines
                                        </p>
                                        <p class="mb-0 text-wrap">
                                            Answered to your comment on the cash
                                            flow forecast's graph 🔔.
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item py-3 border-bottom"
                            >
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-sm me-2">
                                            <span
                                                class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle"
                                            >
                                                <iconify-icon
                                                    icon="iconamoon:comment-dots-duotone"
                                                ></iconify-icon>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold text-wrap">
                                            You have received <b>20</b> new
                                            messages in the conversation
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <!-- Item -->
                            <a
                                href="javascript:void(0);"
                                class="dropdown-item py-3 border-bottom"
                            >
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img
                                            src="{{ asset('assets/images/users/avatar-5.jpg') }}"
                                            class="img-fluid me-2 avatar-sm rounded-circle"
                                            alt="avatar-5"
                                        />
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0 fw-semibold">
                                            Shawn Bunch
                                        </p>
                                        <p class="mb-0 text-wrap">
                                            Commented on Admin
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center py-3">
                            <a
                                href="javascript:void(0);"
                                class="btn btn-primary btn-sm"
                                >View All Notification
                                <i class="bx bx-right-arrow-alt ms-1"></i
                            ></a>
                        </div>
                    </div>
                </div>

                <!-- Theme Setting -->
                <div class="topbar-item">
                    <button
                        type="button"
                        class="topbar-button"
                        id="theme-settings-btn"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#theme-settings-offcanvas"
                        aria-controls="theme-settings-offcanvas"
                    >
                        <iconify-icon
                            icon="iconamoon:settings-duotone"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                    </button>
                </div>

                <!-- Activity -->
                <div class="topbar-item d-none d-md-flex">
                    <button
                        type="button"
                        class="topbar-button"
                        id="theme-settings-btn"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#theme-activity-offcanvas"
                        aria-controls="theme-settings-offcanvas"
                    >
                        <iconify-icon
                            icon="iconamoon:history-duotone"
                            class="fs-24 align-middle"
                        ></iconify-icon>
                    </button>
                </div>

                <!-- User -->
                <div class="dropdown topbar-item">
                    <a
                        type="button"
                        class="topbar-button"
                        id="page-header-user-dropdown"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        <span class="d-flex align-items-center">
                            <img
                                class="rounded-circle"
                                width="32"
                                src="{{ asset('assets/images/users/avatar-1.jpg') }}"
                                alt="avatar-3"
                            />
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome Gaston!</h6>
                        <a class="dropdown-item" href="pages-profile.html">
                            <i
                                class="bx bx-user-circle text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Profile</span>
                        </a>
                        <a class="dropdown-item" href="apps-chat.html">
                            <i
                                class="bx bx-message-dots text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Messages</span>
                        </a>

                        <a class="dropdown-item" href="pages-pricing.html">
                            <i
                                class="bx bx-wallet text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Pricing</span>
                        </a>
                        <a class="dropdown-item" href="pages-faqs.html">
                            <i
                                class="bx bx-help-circle text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Help</span>
                        </a>
                        <a class="dropdown-item" href="auth-lock-screen.html">
                            <i
                                class="bx bx-lock text-muted fs-18 align-middle me-1"
                            ></i
                            ><span class="align-middle">Lock screen</span>
                        </a>

                        <div class="dropdown-divider my-1"></div>

                        <a
                            class="dropdown-item text-danger"
                            href="auth-signin.html"
                        >
                            <i class="bx bx-log-out fs-18 align-middle me-1"></i
                            ><span class="align-middle">Logout</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- sidebar --}}
<div>
    <div
        class="offcanvas offcanvas-end border-0"
        tabindex="-1"
        id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
            <h5 class="text-white m-0">Theme Settings</h5>
            <button
                type="button"
                class="btn-close btn-close-white ms-auto"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
            ></button>
        </div>

        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-3 settings-bar">
                    <div>
                        <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-bs-theme"
                                id="layout-color-light"
                                value="light"
                            />
                            <label
                                class="form-check-label"
                                for="layout-color-light"
                                >Light</label
                            >
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-bs-theme"
                                id="layout-color-dark"
                                value="dark"
                            />
                            <label
                                class="form-check-label"
                                for="layout-color-dark"
                                >Dark</label
                            >
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-topbar-color"
                                id="topbar-color-light"
                                value="light"
                            />
                            <label
                                class="form-check-label"
                                for="topbar-color-light"
                                >Light</label
                            >
                        </div>
                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-topbar-color"
                                id="topbar-color-dark"
                                value="dark"
                            />
                            <label
                                class="form-check-label"
                                for="topbar-color-dark"
                                >Dark</label
                            >
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-color"
                                id="leftbar-color-light"
                                value="light"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-color-light"
                            >
                                Light
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-color"
                                id="leftbar-color-dark"
                                value="dark"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-color-dark"
                            >
                                Dark
                            </label>
                        </div>
                    </div>

                    <div>
                        <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-size"
                                id="leftbar-size-default"
                                value="default"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-size-default"
                            >
                                Default
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-size"
                                id="leftbar-size-small"
                                value="condensed"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-size-small"
                            >
                                Condensed
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-size"
                                id="leftbar-hidden"
                                value="hidden"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-hidden"
                            >
                                Hidden
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-size"
                                id="leftbar-size-small-hover-active"
                                value="sm-hover-active"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-size-small-hover-active"
                            >
                                Small Hover Active
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="data-menu-size"
                                id="leftbar-size-small-hover"
                                value="sm-hover"
                            />
                            <label
                                class="form-check-label"
                                for="leftbar-size-small-hover"
                            >
                                Small Hover
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col">
                    <button
                        type="button"
                        class="btn btn-danger w-100"
                        id="reset-layout"
                    >
                        Reset
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

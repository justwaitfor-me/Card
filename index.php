<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business Card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="public/img/favicon.ico" type="image/x-icon">
</head>

<body id="body" class="theme--dark">
    <input id="menu" type="checkbox">
    <input id="night" type="checkbox">
    <div id="container">
        <div class="header">
            <div class="logo"></div>
            <label class="night-mode" for="night" onclick="enableNight()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-highlights" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-8 5v1H4.5a.5.5 0 0 0-.093.009A7 7 0 0 1 3.1 13zm0-1H2.255a7 7 0 0 1-.581-1H8zm-6.71-2a7 7 0 0 1-.22-1H8v1zM1 8q0-.51.07-1H8v1zm.29-2q.155-.519.384-1H8v1zm.965-2q.377-.54.846-1H8v1zm2.137-2A6.97 6.97 0 0 1 8 1v1z" />
                </svg>
            </label>
        </div>
        <section class="left-section">
            <img class="final profile-pic" />
            <span class="load load-profile-pic profile-pic">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path
                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                    <path
                        d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708z" />
                </svg>

            </span>

            <div class="profile-detail">
                <span class="profile-maps">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        <path
                            d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                    </svg>
                    <span class="final workspace-text">
                        <!--!!FINAL!!-->
                    </span>
                    <span aria-valuemax="20" class=" load load-workspace-text workspace-text" contenteditable>Your
                        Workspace</span>
                </span>
                <p class="final profile-name">
                    <!--!!FINAL!!-->
                </p>
                <p aria-valuemax="16" class="load load-profile-name profile-name" contenteditable>Your Name</p>

                <p class="final profile-summary">
                    <!--!!FINAL!!-->
                </p>
                <p aria-valuemax="120" class="load load-profile-summary profile-summary" contenteditable>Write
                    somthing about you</p>
            </div>

            <div class="final profile-pils">
                <span class="pils">
                    <a target="_blank">
                        <!--!!FINAL!!-->
                    </a></span>
                <span class="pils">
                    <a target=" _blank">
                        <!--!!FINAL!!-->
                    </a>
                </span>
                <span class="pils">
                    <a target="_blank">
                        <!--!!FINAL!!-->
                    </a></span>
            </div>
            <div class="load load-profile-pils profile-pils">
                <span class="pils"><a type="button" data-bs-toggle="modal" data-bs-whatever="1"
                        data-bs-target="#link-entry" data-bs-whatever="@mdo">Link 1</a></span>
                <span class="pils"><a type="button" data-bs-toggle="modal" data-bs-whatever="2"
                        data-bs-target="#link-entry" data-bs-whatever="@mdo">Link 2</a></span>
                <span class="pils"><a type="button" data-bs-toggle="modal" data-bs-whatever="2"
                        data-bs-target="#link-entry" data-bs-whatever="@mdo">Link 3</a></span>
            </div>
        </section>
        <div class="front-smooth"></div>
    </div>
    <div class="modal fade modal-dialog-centered" id="link-entry" tabindex="-1" aria-labelledby="link-entry-label"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/main.js"></script>
    <script src="public/js/input.js"></script>
    <script src="public/js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
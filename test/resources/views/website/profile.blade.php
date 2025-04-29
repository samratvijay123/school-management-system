@extends('website.masterview')

@section('content')

<div class="container">
    <p class="fs-1 fw-bold text-success">Vijay Samrat</p>
    <div class="row gap-3">
        <div class="col-md-4 col-12 p-2 rounded shadow border text-center">
            <div id="imageContainer" class="mb-3 profile_image">
                <img id="displayedImage" src="{{ asset('samrat.JPG') }}" alt="Image" class="img-fluid rounded">
            </div>
            <input type="file" id="fileInput" style="display: none;">
            <button id="changeImageButton" class="btn btn-outline-success">Change Image</button>
        </div>
        <div class="col-md-7 col-12 shadow rounded border p-3">
            <table id="editableTable" class="px-5" width="100%">
                <tbody>
                    <tr>
                        <td class="fs-5 fw-bold mt-3">Personal Information</td>
                    </tr>
                    <tr class="mt-3">
                        <td>
                            <input id="firstName" class="mt-2 w-25 fs-5 p-1 text-secondary" type="text"
                                placeholder="Enter first name" value="Vijay" readonly>
                            <input id="lastName" class="mt-2 w-25 fs-5 p-1 text-secondary" type="text"
                                placeholder="Enter last name" value="Samrat" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-block fs-5 mt-3">Your Gender</td>
                        <td class="d-block fs-5 p-2 text-secondary">
                            <input class="me-2" type="radio" name="Gender" value="Male" checked disabled>Male
                            <input class="mx-2" type="radio" name="Gender" value="Female" disabled>Female
                            <input class="mx-2" type="radio" name="Gender" value="Other" disabled>Other
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td class="fs-5 fw-bold mt-3">Email Address</td>
                    </tr>
                    <tr>
                        <td>
                            <input id="email" class="mt-2 w-50 fs-5 p-1 text-secondary" type="text"
                                placeholder="example@gmail.com" value="vijaysamrat94@gmail.com" readonly>
                        </td>
                    </tr>
                    <tr class="mt-3">
                        <td class="fs-5 fw-bold mt-3">Mobile Number</td>
                    </tr>
                    <tr>
                        <td>
                            <input id="mobile" class="mt-2 w-50 fs-5 p-1 text-secondary" type="text"
                                placeholder="Enter mobile number" value="9814446083" readonly>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="actions mt-2">
                <span class="edit">
                    <button id="editButton" class="edit btn btn-outline-success w-25">Edit</button>
                </span>
                <span class="save-cancel" style="display: none;">
                    <button id="saveButton" class="save btn btn-outline-success w-25">Save</button>
                    <button id="cancelButton" class="cancel btn btn-outline-danger w-25">Cancel</button>
                </span>
            </div>
        </div>
    </div>
</div>

<script>
    // Handle changing the image
    const changeImageButton = document.getElementById('changeImageButton');
    const fileInput = document.getElementById('fileInput');
    const displayedImage = document.getElementById('displayedImage');

    changeImageButton.addEventListener('click', function() {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function(e) {
            displayedImage.src = e.target.result;
        };
        reader.readAsDataURL(file);
    });

    // Handle the edit functionality
    const editButton = document.getElementById('editButton');
    const saveCancelContainer = document.querySelector('.save-cancel');
    const inputs = document.querySelectorAll('input[type="text"]');

    editButton.addEventListener('click', function() {
        inputs.forEach(input => input.removeAttribute('readonly'));
        editButton.style.display = 'none';
        saveCancelContainer.style.display = 'inline-block';
    });

    // Cancel changes
    document.getElementById('cancelButton').addEventListener('click', function() {
        inputs.forEach(input => input.setAttribute('readonly', true));
        editButton.style.display = 'inline-block';
        saveCancelContainer.style.display = 'none';
    });

    // Save changes (You may want to add AJAX or form submission here)
    document.getElementById('saveButton').addEventListener('click', function() {
        inputs.forEach(input => input.setAttribute('readonly', true));
        editButton.style.display = 'inline-block';
        saveCancelContainer.style.display = 'none';
        // Add AJAX or form submission logic here if needed
    });
</script>

@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

<script>
    window.branches = @json($branches);
</script>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    let editor;
    ClassicEditor.create(document.querySelector('#editor'))
        .then(newEditor => {
            editor = newEditor;
            document.querySelector('form').addEventListener('submit', () => {
                document.querySelector('textarea[name="description"]').value = editor.getData();
            });
        })
        .catch(error => console.error(error));

    $(document).ready(function () {
        $('#instructors').select2({ placeholder: 'Select instructors', width: '100%' });
        $('#categories').select2({ placeholder: 'Select categories', width: '100%' });
    });

    let sessionIndex = document.querySelectorAll('.session-row').length;
    document.getElementById('add-session').addEventListener('click', function () {
        const wrapper = document.getElementById('sessions-wrapper');
        const row = document.createElement('div');
        row.className = 'row mb-2 session-row';
        let branchOptions = '<option value="">Select a branch</option>';
        window.branches.forEach(function(branch) {
            branchOptions += `<option value="${branch.id}">${branch.name}</option>`;
        });
        row.innerHTML = `
            <div class="col-md-4">
                <input type="datetime-local" name="sessions[${sessionIndex}][start_date]" class="form-control">
            </div>
            <div class="col-md-4">
                <input type="datetime-local" name="sessions[${sessionIndex}][end_date]" class="form-control">
            </div>
            <div class="col-md-3">
                <select name="sessions[${sessionIndex}][branch_id]" class="form-control" required>
                    ${branchOptions}
                </select>
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-danger remove-session">Remove</button>
            </div>
        `;
        wrapper.appendChild(row);
        sessionIndex++;
    });

    document.getElementById('sessions-wrapper').addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-session')) {
            e.target.closest('.session-row').remove();
        }
    });
</script>
@endpush

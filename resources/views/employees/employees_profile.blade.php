<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Employee Profile</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="flex items-center mb-6">
            <div class="relative">
                <img src="{{ asset('storage/profile_pics/' . $employee->profile_pic) }}" alt="Profile Picture" class="w-24 h-24 rounded-full border-2 border-gray-300 object-cover">
                <form action="{{ route('employee.updatePicture', $employee->id) }}" method="POST" enctype="multipart/form-data" class="absolute bottom-0 right-0">
                    @csrf
                    <input type="file" name="profile_pic" accept="image/*" class="hidden" id="profile_pic_upload">
                    <label for="profile_pic_upload" class="bg-blue-500 text-white px-2 py-1 rounded cursor-pointer">Change Picture</label>
                </form>
            </div>
            <div class="ml-6">
                <h2 class="text-xl font-semibold">{{ $employee->first_name }} {{ $employee->last_name }}</h2>
                <p class="text-gray-600">{{ $employee->employment }}</p>
            </div>
        </div>

        <div class="mb-4">
            <a href="{{ route('employee.edit', $employee->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded">Edit Profile</a>
        </div>

        <div>
            <h3 class="text-lg font-bold">Details</h3>
            <ul class="list-disc list-inside">
                <li><strong>Email:</strong> {{ $employee->email }}</li>
                <li><strong>Contact No:</strong> {{ $employee->contact_no }}</li>
                <li><strong>Address:</strong> {{ $employee->barangay }}, {{ $employee->city }}, {{ $employee->province }}, {{ $employee->region }}</li>
                <li><strong>Nationality:</strong> {{ $employee->nationality }}</li>
                <li><strong>Birth Date:</strong> {{ $employee->bdate }}</li>
                <li><strong>Sex:</strong> {{ $employee->sex }}</li>
                <li><strong>Civil Status:</strong> {{ $employee->civil_status }}</li>
                <li><strong>Education:</strong> {{ $employee->educ_attain }}</li>
                <li><strong>Parent:</strong> {{ $employee->parent }}</li>
                <li><strong>Parent Address:</strong> {{ $employee->parent_address }}</li>
                <li><strong>Learner Classification:</strong> {{ $employee->learner_classification }}</li>
                <li><strong>Type of Disability:</strong> {{ $employee->type_of_disability }}</li>
                <li><strong>Cause of Disability:</strong> {{ $employee->cause_of_disability }}</li>
                <li><strong>Course Name:</strong> {{ $employee->name_course }}</li>
                <li><strong>Scholarship:</strong> {{ $employee->scholar }}</li>
                <li><strong>Privacy Consent:</strong> {{ $employee->privacy_consent }}</li>
            </ul>
        </div>
    </div>
</div>
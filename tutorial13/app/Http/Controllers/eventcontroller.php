<?php

namespace App\Http\Controllers;
use App\Models\gd_event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class eventcontroller extends Controller {

	// set index page view
	public function index() {
		return view('index');
	}

	// handle fetch all eamployees ajax request
	public function fetchAll() {
		$emps = gd_event::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>title</th>
                <th>small_dec</th>
                <th>detail_desc</th>
                <th>galleryid</th>
                <th>photo_url</th>
                <th>Operations</th>


              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp->id . '</td>
				<td>' . $emp->title . '</td>
                <td>' . $emp->small_dec . '</td>
                <td>' . $emp->detail_desc . '</td>
				<td>' . $emp->galleryid . '</td>
                <td>' . $emp->photo_url . '</td>

                <td>
                  <a href="#" id="' . $emp->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $emp->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}

	// handle insert a new employee ajax request
	public function store(Request $request) {

		$empData = ['title' => $request->title, 'small_desc' => $request->small_desc, 'detail_desc' => $request->detail_desc,'galleryid' => $request->galleryid, 'photo_url' => $request->photo_url];
		gd_event::create($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle edit an employee ajax request
    public function edit(Request $request) {
		$id = $request->id;
		$emp = gd_event::find($id);
		return response()->json($emp);
	}

	// handle update an employee ajax request
	public function update(Request $request) {
		$emp = gd_event::find($request->emp_id);


		$empData = ['title' => $request->title, 'small_desc' => $request->small_desc, 'detail_desc' => $request->detail_desc,'galleryid' => $request->galleryid, 'photo_url' => $request->photo_url];

		$emp->update($empData);
		return response()->json([
			'status' => 200,
		]);
	}

	// handle delete an employee ajax request
	public function delete(Request $request) {
		$id = $request->id;
		$emp = gd_event::find($id);
        gd_event::destroy($id);

	}
}

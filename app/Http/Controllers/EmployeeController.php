<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee_form');
    }

   public function store(Request $request)
{
    // Получение данных из формы
    $firstName = $request->input('first_name');
    $lastName = $request->input('last_name');
    $position = $request->input('position');
    $address = $request->input('address');

    // Получение JSON данных
    $jsonData = $request->input('data');
    $dataArray = json_decode($jsonData, true);

    // Пример получения отдельных полей из JSON
    $additionalField1 = $dataArray['field1'] ?? null;
    $additionalField2 = $dataArray['field2'] ?? null;

    // Формируем ответ
    $response = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'position' => $position,
        'address' => $address,
        'additional_field_1' => $additionalField1,
        'additional_field_2' => $additionalField2,
        'path' => $this->getPath($request),
        'url' => $this->getUrl($request),
    ];
    
    var_dump($response); 

    // Возвращаем JSON-ответ
    return response()->json($response);
}

    public function update(Request $request, $id)
    {
        // Получение id из параметров запроса
        $employeeId = $id;

        // Получение данных из формы
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $position = $request->input('position');
        $address = $request->input('address');

        // Получение JSON данных
        $jsonData = $request->input('data');
        $dataArray = json_decode($jsonData, true);

        // Пример получения отдельных полей из JSON
        $additionalField1 = $dataArray['field1'] ?? null;
        $additionalField2 = $dataArray['field2'] ?? null;

        // Логика обновления данных (например, в базу данных) может быть добавлена здесь

        return response()->json([
            'id' => $employeeId,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'position' => $position,
            'address' => $address,
            'additional_field_1' => $additionalField1,
            'additional_field_2' => $additionalField2,
            'path' => $this->getPath($request),
            'url' => $this->getUrl($request),
        ]);
    }

    private function getPath(Request $request)
    {
        return $request->path();
    }

    private function getUrl(Request $request)
    {
        return $request->url();
    }
}

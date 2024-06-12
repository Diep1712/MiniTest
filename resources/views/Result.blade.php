<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết Quả Bài Kiểm Tra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .result-container {
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .result-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .result-content {
            font-size: 14px;
            margin-bottom: 20px;
        }
        .result-content p {
            margin: 5px 0;
        }
        .result-buttons {
            display: flex;
            justify-content: space-between;
        }
        .result-buttons button {
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            font-size: 14px;
            cursor: pointer;
        }
        .result-buttons .view-answers {
            background-color: #007bff;
            color: #fff;
        }
        .result-buttons .close {
            background-color: #dc3545;
            color: #fff;
        }
        .course-link {
            color: #007bff;
            text-decoration: none;
        }
        .course-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="result-container">
    <div class="result-header">HOÀN THÀNH BÀI KIỂM TRA</div>
    <div class="result-content">
        <p>Số câu đúng: {{ $result['correct'] }}/{{ $result['total'] }}</p>
        <p>Phần trăm đúng: {{ round($result['percentage'], 2) }}%</p>
        @if (!empty($result['course']))
            <p>Khóa học phù hợp: 
                <a href="{{ route('course.show', ['course' => strtolower($result['course'])]) }}" class="course-link">{{ $result['course'] }}</a>
            </p>
        @endif
        <p>Tổng điểm: 10 điểm</p>
    </div>
    <div class="result-buttons">
        <button class="view-answers">XEM ĐÁP ÁN</button>
        <button class="close">ĐÓNG</button>
    </div>
</div>

</body>
</html>

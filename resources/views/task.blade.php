<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الأدمن</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!--begin::Fonts-->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
  integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
  crossorigin="anonymous"
/>
<!--end::Fonts-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
  integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
  crossorigin="anonymous"
/>
<!--end::Third Party Plugin(OverlayScrollbars)-->
<!--begin::Third Party Plugin(Bootstrap Icons)-->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
  integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
  crossorigin="anonymous"
/>
<!--end::Third Party Plugin(Bootstrap Icons)-->
<!--begin::Required Plugin(AdminLTE)-->
<link rel="stylesheet" href="{{url('/')}}/AdminLTE-master/dist/css/adminlte.css" />
<!--end::Required Plugin(AdminLTE)-->
<!-- apexcharts -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
  integrity="sha256-4MXpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
  crossorigin="anonymous"
/>
<!-- jsvectormap -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
  integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
  crossorigin="anonymous"
/>


   <style>
        /* إعدادات عامة */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            transition: margin-left 0.3s ease;
        }

        /* شريط التنقل العلوي */
        .navbar {
            background-color: whitesmoke;
            color: #2c3e50;
            padding: 1rem 2rem;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            list-style: none;
            justify-content: flex-start;

        }

        .nav-links li {
            margin-left: 3rem;
        }

        .nav-links a {
            font-size: 13px;
            padding: 3px 5px;
           min-width: 100px;
            color: rgb(20, 20, 20);
            text-decoration: none;
            transition: color 0.3s;
            border: solid 1px mediumturquoise;
            border-radius: 8%;
            text-align: center;
            display: inline-block;



        }

        .nav-links a:hover {
            color: #3498db;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: rgb(26, 22, 22);
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* المحتوى الرئيسي */
        .main-content {
            max-width: 1200px;
            margin: 80px auto 20px;
            padding: 0 20px;
        }

        .content {
            background: white;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        /* القائمة الجانبية */
        .sidebar {
            position: fixed;
            top: 0;
            right: -300px;
            width: 300px;
            height: 100vh;
            background: white;
            box-shadow: -2px 0 10px rgba(0,0,0,0.1);
            z-index: 999;
            transition: right 0.3s ease;
            padding: 1.5rem;
            overflow-y: auto;
        }

        .sidebar.active {
            right: 0;
        }

        .sidebar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }

        .sidebar-header h3 {
            color: #2c3e50;
            margin: 0;
        }

        .close-sidebar {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #777;
            cursor: pointer;
            transition: color 0.3s;
        }

        .close-sidebar:hover {
            color: #e74c3c;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar li {
            margin-bottom: 0.8rem;
        }

        .sidebar a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s;
            display: block;
            padding: 0.5rem 0;
        }

        .sidebar a:hover {
            color: #3498db;
        }

        /* زر فتح القائمة الجانبية */
        .open-sidebar {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px 0 0 5px;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 998;
            transition: all 0.3s ease;
            box-shadow: -2px 0 5px rgba(0,0,0,0.2);
        }

        .open-sidebar:hover {
            background: #3498db;
            padding-right: 20px;
        }

        /* طبقة التعتيم عند فتح القائمة */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 997;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* تذييل الصفحة */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        /* تصميم متجاوب */
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem;
                flex-wrap: wrap;
            }

            .nav-links {
                display: none;
                width: 100%;
                flex-direction: column;
                margin-top: 1rem;
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 0.5rem 0;
            }

            .menu-toggle {
                display: block;
            }

            .main-content {
                margin-top: 70px;
            }

            .sidebar {
                width: 280px;
                right: -280px;
            }
        }

        @media (max-width: 480px) {
            .content {
                padding: 1rem;
            }

            .sidebar {
                width: 100%;
                right: -100%;
            }
        }



        /*   زر التنشيطCSS */
.switch-container {
  display: flex;
  align-items: center;
  gap: 10px;
  font-family: Arial, sans-serif;
  font-size: 16px;
}

.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 26px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  background-color: #ccc;
  border-radius: 34px;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  transition: 0.4s;
}

.slider::before {
  content: "";
  position: absolute;
  height: 20px;
  width: 20px;
  left: 3px;
  bottom: 3px;
  background-color: white;
  border-radius: 50%;
  transition: 0.4s;
}

/* عند التفعيل */
.switch input:checked + .slider {
  background-color: #4CAF50;
}

.switch input:checked + .slider::before {
  transform: translateX(24px);
}

 /*   زر التنشيط نهايةCSS */

 .container {
            max-width: 1000px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            position: relative;
        }
        
       
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        
        .form-row {
            display: contents;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2c3e50;
        }
        
        input, select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input:focus, select:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
            outline: none;
        }
        
        .password-container {
            position: relative;
        }
        
        .toggle-password {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #7f8c8d;
        }
        
        .image-upload {
            grid-column: 1 / -1;
            border: 2px dashed #3498db;
            border-radius: 10px;
            padding: 40px 20px;
            text-align: center;
            margin: 20px 0;
            background-color: #f8fafc;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .image-upload:hover {
            background-color: #e8f4fc;
        }
        
        .image-upload i {
            font-size: 48px;
            color: #3498db;
            margin-bottom: 15px;
        }
        
        .image-upload p {
            font-size: 18px;
            color: #3498db;
            font-weight: 600;
        }
        
        .submit-btn {
            grid-column: 1 / -1;
            background-color: #3498db;
            color: white;
            border: none;
            padding: 15px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            font-weight: 600;
        }
        
        .submit-btn:hover {
            background-color: #2980b9;
        }
        
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .submit-btn {
                grid-column: 1;
            }
        }





        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    min-height: 100vh;
    padding: 20px;
    direction: rtl;
}

.permissions-container {
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    overflow: hidden;
}

.header {
    background: linear-gradient(135deg, #2c3e50, #34495e);
    color: white;
    padding: 25px;
    text-align: center;
}

.header h1 {
    font-size: 2.2em;
    font-weight: 600;
    margin: 0;
}

.permissions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 0;
    padding: 0;
}

.permission-column {
    border-right: 1px solid #e0e0e0;
}

.permission-column:last-child {
    border-right: none;
}

.permission-section {
    padding: 25px;
}

.permission-section h3 {
    color: #2c3e50;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #3498db;
    font-size: 1.3em;
    font-weight: 600;
}

.permission-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.permission-item {
    display: flex;
    align-items: center;
    padding: 12px 15px;
    background: #f8f9fa;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #e9ecef;
    position: relative;
}

.permission-item:hover {
    background: #e3f2fd;
    transform: translateX(-5px);
    border-color: #3498db;
}

.permission-item input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    position: relative;
    height: 20px;
    width: 20px;
    background-color: #fff;
    border: 2px solid #bdc3c7;
    border-radius: 4px;
    margin-left: 15px;
    transition: all 0.3s ease;
}

.permission-item input:checked ~ .checkmark {
    background-color: #3498db;
    border-color: #3498db;
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
    left: 6px;
    top: 2px;
    width: 4px;
    height: 8px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.permission-item input:checked ~ .checkmark:after {
    display: block;
}

.permission-item span:not(.checkmark) {
    font-size: 14px;
    color: #2c3e50;
    font-weight: 500;
    flex: 1;
}

.actions {
    padding: 25px;
    background: #f8f9fa;
    border-top: 1px solid #e0e0e0;
    display: flex;
    justify-content: center;
    gap: 15px;
}

.btn {
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 120px;
}

.btn-primary {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #2980b9, #2573a7);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
}

.btn-secondary {
    background: #95a5a6;
    color: white;
}

.btn-secondary:hover {
    background: #7f8c8d;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(149, 165, 166, 0.4);
}

/* تأثيرات responsive */
@media (max-width: 768px) {
    .permissions-grid {
        grid-template-columns: 1fr;
    }
    
    .permission-column {
        border-right: none;
        border-bottom: 1px solid #e0e0e0;
    }
    
    .permission-column:last-child {
        border-bottom: none;
    }
    
    .header h1 {
        font-size: 1.8em;
    }
    
    .actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
    }
}

/* تأثيرات للعناصر عند التحديد */
.permission-item input:checked ~ span:not(.checkmark) {
    color: #3498db;
    font-weight: 600;
}

/* تأثيرات للـ scroll إذا احتاج */
.permission-list {
    max-height: 400px;
    overflow-y: auto;
    scrollbar-width: thin;
    scrollbar-color: #3498db #f1f1f1;
}

.permission-list::-webkit-scrollbar {
    width: 6px;
}

.permission-list::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 3px;
}

.permission-list::-webkit-scrollbar-thumb {
    background: #3498db;
    border-radius: 3px;
}

.permission-list::-webkit-scrollbar-thumb:hover {
    background: #2980b9;
}

/* العنوان الرئيسي وشريط البحث */
.header {
    background:white;
    color: #2c3e50;
    padding: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.header h1 {
    font-size: 2.2em;
    font-weight: 600;
    margin: 0;
}

.search-container {
    display: flex;
    background: white;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.search-input {
    padding: 12px 20px;
    border: none;
    outline: none;
    font-size: 16px;
    width: 300px;
    background: transparent;
}

.search-btn {
    padding: 12px 20px;
    border: none;
    background: #3498db;
    color: white;
    cursor: pointer;
    transition: background 0.3s ease;
}

.search-btn:hover {
    background: #2980b9;
}

/* قسم النسخ الاحتياطي */
.backup-section {
    padding: 30px;
    border-bottom: 1px solid #e0e0e0;
}

.backup-section h2 {
    color: #2c3e50;
    margin-bottom: 20px;
    font-size: 1.8em;
    border-right: 4px solid #3498db;
    padding-right: 15px;
}

.backup-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 20px;
}

.backup-card {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.card-header {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h3 {
    margin: 0;
    font-size: 1.3em;
}

.date {
    background: rgba(255, 255, 255, 0.2);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 0.9em;
}

.card-content {
    padding: 20px;
}

.backup-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #e9ecef;
    transition: background 0.3s ease;
}

.backup-item:hover {
    background: #e9ecef;
    border-radius: 5px;
    padding: 15px;
}

.backup-item:last-child {
    border-bottom: none;
}

.backup-name {
    font-weight: 500;
    color: #2c3e50;
}

.backup-date {
    background: #e3f2fd;
    color: #1976d2;
    padding: 5px 12px;
    border-radius: 15px;
    font-size: 0.9em;
    font-weight: 500;
}

/* قسم جدول البيانات */
.data-section {
    padding: 30px;
}

.data-section h2 {
    color: #2c3e50;
    margin-bottom: 20px;
    font-size: 1.8em;
    border-right: 4px solid #3498db;
    padding-right: 15px;
}

.table-container {
    overflow-x: auto;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.data-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 800px;
}

.data-table th {
    background: linear-gradient(135deg, #34495e, #2c3e50);
    color: white;
    padding: 15px;
    text-align: right;
    font-weight: 600;
    border: 1px solid #ddd;
}

.data-table td {
    padding: 15px;
    border: 1px solid #e0e0e0;
    text-align: right;
}

.data-table tbody tr {
    transition: background 0.3s ease;
}

.data-table tbody tr:nth-child(even) {
    background: #f8f9fa;
}

.data-table tbody tr:hover {
    background: #e3f2fd;
}

.data-table td:first-child {
    max-width: 300px;
    word-wrap: break-word;
}

.action-btn {
    background: #3498db;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 0.9em;
}

.action-btn:hover {
    background: #2980b9;
    transform: translateY(-2px);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

/* أزرار التحكم */
.actions {
    padding: 25px;
    background: #f8f9fa;
    border-top: 1px solid #e0e0e0;
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.btn {
    padding: 12px 30px;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 150px;
}

.btn-primary {
    background: linear-gradient(135deg, #27ae60, #219a52);
    color: white;
}

.btn-primary:hover {
    background: linear-gradient(135deg, #219a52, #1e8b4a);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(39, 174, 96, 0.4);
}

.btn-secondary {
    background: linear-gradient(135deg, #3498db, #2980b9);
    color: white;
}

.btn-secondary:hover {
    background: linear-gradient(135deg, #2980b9, #2573a7);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
}

.btn-outline {
    background: transparent;
    color: #3498db;
    border: 2px solid #3498db;
}

.btn-outline:hover {
    background: #3498db;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.4);
}

/* تأثيرات responsive */
@media (max-width: 768px) {
    .header {
        flex-direction: column;
        text-align: center;
    }
    
    .search-input {
        width: 250px;
    }
    
    .backup-cards {
        grid-template-columns: 1fr;
    }
    
    .card-header {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }
    
    .actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
    }
    
    .data-table {
        font-size: 0.9em;
    }
    
    .data-table th,
    .data-table td {
        padding: 10px 8px;
    }
}

/* تأثيرات scroll للجدول */
.table-container::-webkit-scrollbar {
    height: 8px;
}

.table-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.table-container::-webkit-scrollbar-thumb {
    background: #3498db;
    border-radius: 4px;
}

.table-container::-webkit-scrollbar-thumb:hover {
    background: #2980b9;
}

/* تأثيرات للبحث */
.search-input:focus {
    background: #f8f9fa;
}

/* تأثيرات للبطاقات */
.backup-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.backup-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}









  .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #f1f1f1;
        }
        
        .capacity-control {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .capacity-btn {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            width: 30px;
            height: 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .capacity-btn:hover {
            background-color: #2980b9;
        }
        
        .capacity-value {
            font-weight: bold;
            min-width: 40px;
            text-align: center;
        }
        
        .checkbox {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        
        .delete-btn {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .delete-btn:hover {
            background-color: #c0392b;
        }
        
        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }
            
            th, td {
                padding: 8px 10px;
            }
        }



.table-wrapper {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* لتحسين التمرير على الأجهزة المحمولة */
    border: 1px solid #e0e0e0;
    border-radius: 4px;
}

/* تأكد من أن الجدول لا ينكسر */
table {
    min-width: 800px; /* أو أي عرض يناسب محتوى جدولك */
    width: 100%;
}

/* تحسين المظهر على الشاشات الصغيرة */
@media (max-width: 768px) {
    .table-wrapper {
        font-size: 14px;
    }
    
    .capacity-control {
        white-space: nowrap; /* منع كسر السطر في أزرار السعة */
    }
}

        

    </style>
</head>
<body>
    <!-- طبقة التعتيم -->
    <div class="overlay" id="overlay"></div>

    <!-- زر فتح القائمة الجانبية -->
    <button class="open-sidebar" id="openSidebar">
        <i class="fas fa-chevron-left"></i>
    </button>

    <!-- شريط التنقل العلوي -->
    <nav class="navbar">

        <div class="logo">كنان محمد ميهوب</div>
        <button class="menu-toggle" id="menuToggle">☰</button>
        <ul class="nav-links" id="navLinks">
            <li> <!-- HTML -->
<label class="switch-container text-info">
  نشط
  <label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
  </label>
</label>  </li>
            <li ><a href="#"class="bg-primary text-info">حفظ</a></li>
            <li><a href="#" class="text-info">حفظ وإضافةأخر</a></li>
            <li><a href="#"class="text-info">إلغاء</a></li>
            <li ><a href="#"class="bg-danger text-info">حذف </a></li>
            <!--begin::User Menu Dropdown-->
      <li class="nav-item dropdown user-menu " >
        <a href="#" class="nav-link dropdown-toggle bg-info" data-bs-toggle="dropdown" >

          <span class="d-none d-md-inline">kenan</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-start bg-info">
          <!--begin::User Image-->
          <li >

            
            
     
              <small><pre> kenan
                 Web Developer</pre></small>
              <a href="#" class="bg-light" >log out</a>
            
          </li>

        </ul>
      </li>
      <!--end::User Menu Dropdown-->
        </ul>
    </nav>

    <!-- القائمة الجانبية -->
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3>القائمة الجانبية</h3>
            <button class="close-sidebar" id="closeSidebar">
                <i class="fas fa-times"></i>
            </button>
        </div>
<h3 style="margin-top: 2rem;">التطبيق </h3>
<ul class="list-group">
    <li class="list-group-item"><a href="#"><i class="bi bi-house-door"></i> الرئيسية</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-people"></i> العملاء </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-shield-check"></i> صلاحيات الوصول</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-chat-square-text"></i> الواجهات الترحيبية</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-bell"></i> إشعارات ورسائل</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-clock-history"></i> منتهي الصلاحيه</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-collection"></i> باقات اللإشتراك </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-receipt"></i> ملاحظات قبل الفاتورة </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-app-indicator"></i> ايقونات </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-tags"></i> الاسعار </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-share"></i> التواصل الاجتماعي </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-info-circle"></i> حول التطبيق </a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-trash"></i> المحذوفات </a></li>
</ul>

<h3 style="margin-top: 2rem;">الإدارة </h3>
<ul class="list-group">
    <li class="list-group-item"><a href="#"><i class="bi bi-graph-up"></i> التقارير</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-person-badge"></i> الموظفين</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-whatsapp"></i> أرقام الواتس</a></li>
    <li class="list-group-item"><a href="#"><i class="bi bi-cloud-arrow-down"></i> النسخ الإحتياطية </a></li>
</ul>
    </aside>

    <!-- المحتوى الرئيسي -->
    <div class="main-content">
        <div class="content">
          <div class="container">
        
        
        <div class="image-upload" id="imageUpload">
            <i>📁</i>
            <p>اسحب الصورة إلى هنا أو انقر لتصفح</p>
        </div>
        
        <form id="clientForm">
            <div class="form-grid">
                <!-- الصف الأول -->
                <div class="form-group">
                    <label for="clientName">اسم العميل</label>
                    <input type="text" id="clientName" required>
                </div>
                
                <div class="form-group">
                    <label for="phoneNumber">رقم الهاتف</label>
                    <div style="display: flex;">
                        <select id="countryCode" style="width: 30%; margin-left: 10px;">
                            <option value="+966">+966 (السعودية)</option>
                            <option value="+971">+971 (الإمارات)</option>
                            <option value="+965">+965 (الكويت)</option>
                            <option value="+973">+973 (البحرين)</option>
                            <option value="+974">+974 (قطر)</option>
                            <option value="+968">+968 (عمان)</option>
                            <option value="+20">+20 (مصر)</option>
                            <option value="+962">+962 (الأردن)</option>
                        </select>
                        <input type="tel" id="phoneNumber" style="width: 70%;" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">كلمة السر</label>
                    <div class="password-container">
                        <input type="password" id="password" required>
                        <button type="button" class="toggle-password" id="togglePassword">👁️</button>
                    </div>
                </div>
                
                <!-- الصف الثاني -->
                <div class="form-group">
                    <label for="email">البريد الإلكتروني</label>
                    <input type="email" id="email" required>
                </div>
                
                <div class="form-group">
                    <label for="gender">الجنس</label>
                    <select id="gender" required>
                        <option value="">اختر الجنس</option>
                        <option value="male">ذكر</option>
                        <option value="female">أنثى</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="workType">نوع العمل</label>
                    <select id="workType" required>
                        <option value="">اختر نوع العمل</option>
                        <option value="pharmacy">صيدلية</option>
                        <option value="office">مكتب</option>
                        <option value="store">متجر</option>
                        <option value="clinic">عيادة</option>
                        <option value="restaurant">مطعم</option>
                        <option value="other">أخرى</option>
                    </select>
                </div>
                
                <!-- الصف الثالث -->
                <div class="form-group">
                    <label for="country">الدولة</label>
                    <select id="country" required>
                        <option value="">اختر الدولة</option>
                        <option value="sa">المملكة العربية السعودية</option>
                        <option value="ae">الإمارات العربية المتحدة</option>
                        <option value="kw">الكويت</option>
                        <option value="bh">البحرين</option>
                        <option value="qa">قطر</option>
                        <option value="om">عمان</option>
                        <option value="eg">مصر</option>
                        <option value="jo">الأردن</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="state">المحافظة</label>
                    <select id="state" required>
                        <option value="">اختر المحافظة</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="address">العنوان</label>
                    <input type="text" id="address" required>
                </div>
                
                <!-- الصف الرابع -->
                <div class="form-group">
                    <label for="subscription">باقة الاشتراك</label>
                    <select id="subscription" required>
                        <option value="">اختر الباقة</option>
                        <option value="100">100$</option>
                        <option value="200">200$</option>
                        <option value="500">500$</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="startDate">تاريخ الاشتراك</label>
                    <input type="date" id="startDate" required>
                </div>
                
                <div class="form-group">
                    <label for="endDate">تاريخ الانتهاء</label>
                    <input type="date" id="endDate" required>
                </div>
                
                <!-- الصف الخامس -->
                <div class="form-group">
                    <label for="platformType">نوع المنصة</label>
                    <select id="platformType" required>
                        <option value="">اختر نوع المنصة</option>
                        <option value="web">ويب</option>
                        <option value="mobile">موبايل</option>
                        <option value="desktop">سطح المكتب</option>
                        <option value="all">جميع المنصات</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="devicesCount">عدد الأجهزة</label>
                    <input type="number" id="devicesCount" min="1" required>
                </div>
                
                <div class="form-group">
                    <label for="mediator">الوسيط</label>
                    <input type="text" id="mediator">
                </div>
                
                <!-- الصف السادس (خانتان فقط) -->
                <div class="form-group">
                    <label for="registrationDate">تاريخ التسجيل الأول</label>
                    <input type="date" id="registrationDate" required>
                </div>
                
                <div class="form-group">
                    <label for="addedBy">أضيف بواسطة</label>
                    <input type="text" id="addedBy" required>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">إضافة العميل</button>
        </form>
    </div>

     <div class="permissions-container">
        <div class="header">
            <h1>صلاحيات الوصول</h1>
        </div>
        
        <div class="permissions-grid">
            <!-- العمود الأول -->
            <div class="permission-column">
                <div class="permission-section">
                    <div class="permission-list">
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            المبيعات
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            المشتريات
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            العملاء
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            الموردين
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            المجموعات
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            المصروفات
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            الديون
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            الأقساط
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            المدين
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            اون لاين
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                             التقارير
                        </label>
                    </div>
                </div>
            </div>

            <!-- العمود الثاني -->
            <div class="permission-column">
                <div class="permission-section">
                    <div class="permission-list">
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            انشاء فاتورة مبيعات  
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            الإشعارات  
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                              ملاحظات ذيل الفاتورة 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            قارئ الأسعار
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            الدفعات والأشتراكات
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            استراد وتصدير
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            سجل التغييرات 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            متاجر متعدده 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            ملاحظات 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            الإعدادات 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            الدعم
                        </label>
                    </div>
                </div>
            </div>

            <!-- العمود الثالث -->
            <div class="permission-column">
                <div class="permission-section">
                    <div class="permission-list">
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            إصدار التطبيق
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                             أيقونة السوشال ميديا 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            البيانات والنسخ الإحتياطيه 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            نسخ احتياطي في جهاذك 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            نسخ احتياطي سحابي 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            حذف جميع بيانات التطبيق 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            تخصيص التقارير 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            نقدك بيع 1
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            نقدك بيع 2
                        </label>
                        <label class="permission-item">
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            نقدك بيع 3 
                        </label>
                        <label class="permission-item">
                            <input type="checkbox" checked>
                            <span class="checkmark"></span>
                            تقارير الواجهه الأمامية
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="actions">
            <button class="btn btn-primary" id="activateAll">تفعيل الكل</button>
            <button class="btn btn-secondary" id="deactivateAll">إيقاف الكل</button>
            <button class="btn btn-primary">حفظ التغييرات</button>
            <button class="btn btn-secondary">إلغاء</button>
        </div>
    </div>





<!-- العنوان الرئيسي -->
        <div class="header">
            <h1>متاجر متعددة</h1>
            <div class="search-container">
                <input type="text" placeholder="بحث..." class="search-input">
                <button class="search-btn">🔍</button>
            </div>
        </div>

        <!-- القسم الأول: بيانات النسخ -->
        <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            
                            <th><input type="checkbox" checked></th>
                            <th>اسم المتجر</th>
                            <th>تاريخ الإنشاء</th>
                            <th> الحالة</th>
                            <th>حذف</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <input type="checkbox" checked></td>
                            <td>متجر في البصرة</td>
                            <td>22/3/2024</td>
                            <td><label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
  </label></td>
                            <td>
                                <button class="action-btn">🗑️ </button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><input type="checkbox" checked></td>
                            <td>متجر في البصرة</td>
                            <td>6/5/2025</td>
                            <td><label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
  </label></td>
                            <td>
                                <button class="action-btn">🗑️ </button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td> <input type="checkbox" checked></td>
                            <td>متجر في البصرة</td>
                            <td>22/3/2024</td>
                            <td><label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
  </label></td>
                            <td>
                                <button class="action-btn">🗑️ </button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td><input type="checkbox" checked></td>
                            <td>متجر في البصرة</td>
                            <td>22/3/2024</td>
                            <td><label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
  </label></td>
                            <td>
                                <button class="action-btn">🗑️ </button>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>

        <!-- القسم الثاني: جدول البيانات -->
 <div class="container">
        <h1>البيانات والنسخ الاحطياطية</h1>
         <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th><input type="checkbox" checked></th>
                    <th>اسم البيانات</th>
                    <th>تاريخ الهدفاء</th>
                    <th>السعة</th>
                    <th>نوع المنصة</th>
                    <th>تنزيل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>اسم قاعدة البيانات تكون باسم تسجيل الدخول او برقم الهاتف</td>
                    <td>6/5/2025</td>
                    <td>
                        <div class="capacity-control">
                            <button class="capacity-btn decrease">-</button>
                            <span class="capacity-value">16</span>
                            <button class="capacity-btn increase">+</button>
                        </div>
                    </td>
                    <td>موبایل</td>
                     <td><button class="capacity-btn increase">🔽</button></td>
                    <td><button class="delete-btn">حذف</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>001234589654123</td>
                    <td>6/5/2025</td>
                    <td>
                        <div class="capacity-control">
                            <button class="capacity-btn decrease">-</button>
                            <span class="capacity-value">16</span>
                            <button class="capacity-btn increase">+</button>
                        </div>
                    </td>
                    <td>موبایل</td>
                     <td><button class="capacity-btn increase">🔽</button></td>
                    <td><button class="delete-btn">حذف</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>على حسين عثمان عمر</td>
                    <td>6/5/2025</td>
                    <td>
                        <div class="capacity-control">
                            <button class="capacity-btn decrease">-</button>
                            <span class="capacity-value">16</span>
                            <button class="capacity-btn increase">+</button>
                        </div>
                    </td>
                    <td>موبایل</td>
                     <td><button class="capacity-btn increase">🔽</button></td>
                    <td><button class="delete-btn">حذف</button></td>
                </tr>
                <tr>
                    <td><input type="checkbox" checked></td>
                    <td>RayPWSMmNUXqQLPpgWFOLz1LemcIghwK3gXy8l7n.zip</td>
                    <td>6/5/2025</td>
                    <td>
                        <div class="capacity-control">
                            <button class="capacity-btn decrease">-</button>
                            <span class="capacity-value">16</span>
                            <button class="capacity-btn increase">+</button>
                        </div>
                    </td>
                    <td>موبایل</td>
                   <td><button class="capacity-btn increase">🔽</button></td>
                    <td><button class="delete-btn">حذف</button></td>
                </tr>
            </tbody>
        </table>

        </div>
    </div>





          </div>
    </div>

    <!-- تذييل الصفحة -->
    <footer>
        <p>جميع الحقوق محفوظة &copy; </p>
    </footer>

    <script>
        // عناصر DOM
        const sidebar = document.getElementById('sidebar');
        const openSidebarBtn = document.getElementById('openSidebar');
        const closeSidebarBtn = document.getElementById('closeSidebar');
        const overlay = document.getElementById('overlay');
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        // فتح القائمة الجانبية
        openSidebarBtn.addEventListener('click', function() {
            sidebar.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden'; // منع التمرير عند فتح القائمة
        });

        // إغلاق القائمة الجانبية
        function closeSidebar() {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto'; // إعادة التمرير
        }

        closeSidebarBtn.addEventListener('click', closeSidebar);
        overlay.addEventListener('click', closeSidebar);

        // إغلاق القائمة عند النقر على رابط
        document.querySelectorAll('.sidebar a').forEach(link => {
            link.addEventListener('click', closeSidebar);
        });

        // تفعيل زر القائمة المنسدلة للهواتف
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });

        // إغلاق القائمة عند النقر على رابط (للأجهزة الصغيرة)
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    navLinks.classList.remove('active');
                }
            });
        });

        // إغلاق القائمة عند تغيير حجم النافذة
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                navLinks.classList.remove('active');
            }
        });
    </script>
    <!--begin::Script-->
<!--begin::Third Party Plugin(OverlayScrollbars)-->
<script
src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
crossorigin="anonymous"
></script>
<!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
<script
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
crossorigin="anonymous"
></script>
<!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
crossorigin="anonymous"
></script>
<!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
<script src="{{url('/')}}/AdminLTE-master/dist/js/adminlte.js"></script>
<!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
<script>
const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
  scrollbarTheme: 'os-theme-light',
  scrollbarAutoHide: 'leave',
  scrollbarClickScroll: true,
};
document.addEventListener('DOMContentLoaded', function () {
  const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
  if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
    OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
      scrollbars: {
        theme: Default.scrollbarTheme,
        autoHide: Default.scrollbarAutoHide,
        clickScroll: Default.scrollbarClickScroll,
      },
    });
  }
});
</script>
<!--end::OverlayScrollbars Configure-->
<!-- OPTIONAL SCRIPTS -->
<!-- sortablejs -->
<script
src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"
integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ="
crossorigin="anonymous"
></script>
<!-- sortablejs -->
<script>
const connectedSortables = document.querySelectorAll('.connectedSortable');
connectedSortables.forEach((connectedSortable) => {
  let sortable = new Sortable(connectedSortable, {
    group: 'shared',
    handle: '.card-header',
  });
});

const cardHeaders = document.querySelectorAll('.connectedSortable .card-header');
cardHeaders.forEach((cardHeader) => {
  cardHeader.style.cursor = 'move';
});
</script>
<!-- apexcharts -->
<script
src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
crossorigin="anonymous"
></script>
<!-- ChartJS -->
<script>
// NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
// IT'S ALL JUST JUNK FOR DEMO
// ++++++++++++++++++++++++++++++++++++++++++

const sales_chart_options = {
  series: [
    {
      name: 'Digital Goods',
      data: [28, 48, 40, 19, 86, 27, 90],
    },
    {
      name: 'Electronics',
      data: [65, 59, 80, 81, 56, 55, 40],
    },
  ],
  chart: {
    height: 300,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  legend: {
    show: false,
  },
  colors: ['#0d6efd', '#20c997'],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    type: 'datetime',
    categories: [
      '2023-01-01',
      '2023-02-01',
      '2023-03-01',
      '2023-04-01',
      '2023-05-01',
      '2023-06-01',
      '2023-07-01',
    ],
  },
  tooltip: {
    x: {
      format: 'MMMM yyyy',
    },
  },
};

const sales_chart = new ApexCharts(
  document.querySelector('#revenue-chart'),
  sales_chart_options,
);
sales_chart.render();
</script>
<!-- jsvectormap -->
<script
src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js"
integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y="
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js"
integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY="
crossorigin="anonymous"
></script>
<!-- jsvectormap -->
<script>
const visitorsData = {
  US: 398, // USA
  SA: 400, // Saudi Arabia
  CA: 1000, // Canada
  DE: 500, // Germany
  FR: 760, // France
  CN: 300, // China
  AU: 700, // Australia
  BR: 600, // Brazil
  IN: 800, // India
  GB: 320, // Great Britain
  RU: 3000, // Russia
};

// World map by jsVectorMap
const map = new jsVectorMap({
  selector: '#world-map',
  map: 'world',
});

// Sparkline charts
const option_sparkline1 = {
  series: [
    {
      data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
    },
  ],
  chart: {
    type: 'area',
    height: 50,
    sparkline: {
      enabled: true,
    },
  },
  stroke: {
    curve: 'straight',
  },
  fill: {
    opacity: 0.3,
  },
  yaxis: {
    min: 0,
  },
  colors: ['#DCE6EC'],
};

const sparkline1 = new ApexCharts(document.querySelector('#sparkline-1'), option_sparkline1);
sparkline1.render();

const option_sparkline2 = {
  series: [
    {
      data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
    },
  ],
  chart: {
    type: 'area',
    height: 50,
    sparkline: {
      enabled: true,
    },
  },
  stroke: {
    curve: 'straight',
  },
  fill: {
    opacity: 0.3,
  },
  yaxis: {
    min: 0,
  },
  colors: ['#DCE6EC'],
};

const sparkline2 = new ApexCharts(document.querySelector('#sparkline-2'), option_sparkline2);
sparkline2.render();

const option_sparkline3 = {
  series: [
    {
      data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
    },
  ],
  chart: {
    type: 'area',
    height: 50,
    sparkline: {
      enabled: true,
    },
  },
  stroke: {
    curve: 'straight',
  },
  fill: {
    opacity: 0.3,
  },
  yaxis: {
    min: 0,
  },
  colors: ['#DCE6EC'],
};

const sparkline3 = new ApexCharts(document.querySelector('#sparkline-3'), option_sparkline3);
sparkline3.render();
</script>


<!--end::Script 1-->

 <script>
        // كود لإظهار/إخفاء كلمة السر
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.textContent = type === 'password' ? '👁️' : '🙈';
        });
        
        // كود لتحميل الصورة
        document.getElementById('imageUpload').addEventListener('click', function() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.onchange = function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        document.getElementById('imageUpload').innerHTML = `
                            <img src="${event.target.result}" style="max-width: 100%; max-height: 200px; border-radius: 5px;">
                            <p>تم تحميل الصورة بنجاح</p>
                        `;
                    };
                    reader.readAsDataURL(file);
                }
            };
            input.click();
        });
        
        // كود لتحديث المحافظات بناءً على الدولة المختارة
        document.getElementById('country').addEventListener('change', function() {
            const country = this.value;
            const stateSelect = document.getElementById('state');
            stateSelect.innerHTML = '<option value="">اختر المحافظة</option>';
            
            const states = {
                'sa': ['الرياض', 'مكة المكرمة', 'المدينة المنورة', 'الشرقية', 'عسير', 'تبوك', 'حائل', 'الحدود الشمالية', 'الجوف', 'نجران', 'الباحة', 'الجوف'],
                'ae': ['أبو ظبي', 'دبي', 'الشارقة', 'عجمان', 'أم القيوين', 'رأس الخيمة', 'الفجيرة'],
                'kw': ['العاصمة', 'حولي', 'الفروانية', 'الجهراء', 'مبارك الكبير', 'الأحمدي'],
                'bh': ['المنامة', 'المحرق', 'الشمالية', 'الجنوبية', 'الوسطى'],
                'qa': ['الدوحة', 'الريان', 'أم صلال', 'الخور', 'الوكرة', 'الضعاين', 'الشحانية'],
                'om': ['مسقط', 'ظفار', 'مسندم', 'البريمي', 'الوسطى', 'الشرقية', 'الداخلية', 'الباطنة'],
                'eg': ['القاهرة', 'الإسكندرية', 'الجيزة', 'الشرقية', 'الدقهلية', 'البحر الأحمر', 'أسوان', 'الأقصر'],
                'jo': ['عمان', 'إربد', 'الزرقاء', 'مأدبا', 'العقبة', 'الكرك', 'معان', 'الطفيلة']
            };
            
            if (states[country]) {
                states[country].forEach(state => {
                    const option = document.createElement('option');
                    option.value = state;
                    option.textContent = state;
                    stateSelect.appendChild(option);
                });
            }
        });
        
        // كود لإرسال النموذج
        document.getElementById('clientForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('تم إرسال النموذج بنجاح!');
            // هنا يمكنك إضافة كود لإرسال البيانات إلى الخادم
        });
    </script>
    

     <script>
        document.addEventListener('DOMContentLoaded', function() {
            // الحصول على جميع أزرار زيادة ونقصان السعة
            const increaseButtons = document.querySelectorAll('.capacity-btn.increase');
            const decreaseButtons = document.querySelectorAll('.capacity-btn.decrease');
            
            // إضافة مستمعي الأحداث لأزرار زيادة السعة
            increaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const capacityValue = this.parentElement.querySelector('.capacity-value');
                    let currentValue = parseInt(capacityValue.textContent);
                    
                    // زيادة السعة بمقدار 50 ميغا
                    currentValue *= 2;
                    capacityValue.textContent = currentValue;
                });
            });
            
            // إضافة مستمعي الأحداث لأزرار نقصان السعة
            decreaseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const capacityValue = this.parentElement.querySelector('.capacity-value');
                    let currentValue = parseInt(capacityValue.textContent);
                    
                    // نقصان السعة بمقدار 50 ميغا (مع التأكد من عدم النزول تحت الصفر)
                    if (currentValue >= 5) {
                        currentValue *= 2;
                        capacityValue.textContent = currentValue;
                    }
                });
            });
            
            // إضافة مستمعي الأحداث لأزرار الحذف
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    if (confirm('هل أنت متأكد من رغبتك في حذف هذا العنصر؟')) {
                        row.remove();
                    }
                });
            });
        });
    </script>





 <script>
        // الحصول على الأزرار باستخدام المعرفات
        const activateAllBtn = document.getElementById('activateAll');
        const deactivateAllBtn = document.getElementById('deactivateAll');

        // وظيفة تفعيل جميع مربعات الاختيار
        function activateAllCheckboxes() {
            const checkboxes = document.querySelectorAll('.permission-item input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = true;
            });
        }

        // وظيفة إيقاف جميع مربعات الاختيار
        function deactivateAllCheckboxes() {
            const checkboxes = document.querySelectorAll('.permission-item input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = false;
            });
        }

        // إضافة مستمعي الأحداث للأزرار
        activateAllBtn.addEventListener('click', activateAllCheckboxes);
        deactivateAllBtn.addEventListener('click', deactivateAllCheckboxes);
    </script>
</body>
</html>

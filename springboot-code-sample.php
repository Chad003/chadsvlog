<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/header.php" ?>

    <!-- PrismJS (syntax highlighting) -->
    <link href="https://cdn.jsdelivr.net/npm/prismjs/themes/prism-tomorrow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/prismjs/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs/components/prism-java.min.js"></script>

    <style>
        h2 {
            margin-bottom: 15px;
            color: #38bdf8;
        }

        .code-container {
            position: relative;
            background: #1e293b;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            overflow: hidden;
        }

        pre {
            margin: 0;
            max-height: 70vh;
            overflow: auto;
        }

        code {
            font-size: 14px;
        }

        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #38bdf8;
            border: none;
            color: black;
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
        }

        .copy-btn:hover {
            background: #0ea5e9;
        }
    </style>
</head>

<body>

    <?php include "./components/sidebar.php" ?>

    <main class="flex-1 min-h-screen pt-24 md:pt-12 px-8">
        <div class="code-container">
            <button class="copy-btn" onclick="copyCode()">Copy</button>

            <pre><code id="javaCode" class="language-java">
package com.api.exam;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
// TODO: Add missing imports
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.stereotype.Service;
import org.springframework.stereotype.Repository;

import java.util.ArrayList;
import java.util.List;

@SpringBootApplication
public class ExamApplication {

    public static void main(String[] args) {
        SpringApplication.run(ExamApplication.class, args);
    }
}

// TODO: Make this a REST Controller
// TODO: Add base path "/students"
@RestController
@RequestMapping("/students")
class StudentController {

    // TODO: Inject StudentService
    @Autowired 
    private StudentService studentService;
    

    // TODO: Return all students
    @GetMapping
    public List<Student> getAllStudents() {
        return studentService.getAllStudents();
    }

    // TODO: Accept POST request
    // TODO: Read Student from request body
    @PostMapping
    public Student createStudent(@RequestBody Student student) {
        return studentService.createStudent(student);
    }

    // TODO: Create endpoint GET /students/{id}
    @GetMapping("/{id}")
    public Student getStudent(@PathVariable int id) {
        return studentService.getStudent(id);
    }
}

class Student {

    private int id;
    private String name;
    private String email;

    public Student() {}

    // TODO: Generate getters and setters

    public int getId(){
        return this.id;
    }

    public String getName(){
        return this.name;
    }

    public String getEmail(){
        return this.email;
    }

    public void setId(int id){
        this.id = id;
    }

    public void setName(String name){
        this.name = name;
    }

    public void setEmail(String email){
        this.email = email;
    }

}

// TODO: Register as Spring Service
@Service
class StudentService {

    // TODO: Inject repository
    @Autowired
    @Qualifier("memoryRepository")
    private StudentRepository repository;

    public List<Student> getAllStudents() {
        return repository.findAll();
    }

    public Student createStudent(Student student) {
        return repository.save(student);
    }

    public Student getStudent(int id) {
        Student student = repository.findById(id);
        if(student == null){
            throw new RuntimeException("Student not found");
        }
        return student;
    }
}

interface StudentRepository {

    List<Student> findAll();

    Student findById(int id);

    Student save(Student student);
}

// TODO: Register as repository bean
// TODO: Give bean name "memoryRepository"
@Repository("memoryRepository")
class MemoryStudentRepository implements StudentRepository {

    private final List<Student> students = new ArrayList<>();

    @Override
    public List<Student> findAll() {
        return students;
    }

    @Override
    public Student findById(int id) {
        return students.stream()
                .filter(s -> s.getId() == id)
                .findFirst()
                .orElse(null);
    }

    @Override
    public Student save(Student student) {
        students.add(student);
        return student;
    }
}

// TODO: Register as repository bean
// TODO: Give bean name "backupRepository"
@Repository("backupRepository")
class BackupStudentRepository implements StudentRepository {

    @Override
    public List<Student> findAll() {
        return new ArrayList<>();
    }

    @Override
    public Student findById(int id) {
        return null;
    }

    @Override
    public Student save(Student student) {
        return student;
    }
}
    </code></pre>
        </div>
    </main>
    <script>
        function copyCode() {
            const code = document.getElementById("javaCode").innerText;
            navigator.clipboard.writeText(code);
        }
    </script>

</body>

</html>
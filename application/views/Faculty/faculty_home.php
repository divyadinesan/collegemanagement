<?php
$this->load->view('Faculty/Layout/faculty_header');


if($this->session->flashdata('login_success')){
?>
<script>
toastr.success("success");
</script>
<?php
}
?>


<?php
$this->load->view('Faculty/Layout/faculty_footer');
?>
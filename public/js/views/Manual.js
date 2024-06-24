document.addEventListener("DOMContentLoaded", function() {
    let currentFeatureElement = document.getElementById('feature_1'); // ตั้งค่าค่าเริ่มต้น

    function showFeature(featureId, featureElement) {
        // ซ่อนทุกเนื้อหา
        document.querySelectorAll('.feature-content').forEach(function(content) {
            content.classList.remove('active');
        });
        document.getElementById(featureId).classList.add('active');

        // รีเซ็ตสถานะ active ของปุ่ม
        document.querySelectorAll('.Mn .feature').forEach(function(feature) {
            feature.classList.remove('active');
        });
        featureElement.classList.add('active');

        // เก็บปุ่มที่ถูกคลิก
        currentFeatureElement = featureElement;
    }

    // เพิ่มการคลิกเหตุการณ์สำหรับทุกปุ่ม
    document.querySelectorAll('.Mn .feature').forEach(function(feature) {
        feature.addEventListener('click', function(event) {
            event.preventDefault();
            const featureId = this.id.replace('feature_', '');
            showFeature(featureId, this);
        });
    });

    // แสดงฟีเจอร์แรกโดยเริ่มต้น
    showFeature('1', currentFeatureElement);

    // ตรวจสอบการคลิกนอกเมนู
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.Mn')) {
            if (currentFeatureElement) {
                currentFeatureElement.classList.add('active');
            }
        }
    });
});
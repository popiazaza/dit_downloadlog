# DIT Download Log

DIT Download Log is a download log plugin for Discuz! X (CMS). There is no plan to support other language currently.

  - ปัจจุบันพัฒนาโดย [popiazaza](https://github.com/popiazaza/2thchat)
  - กระทู้พัฒนาสามารถดูได้ที่ [ดิสคัสอินไทย](https://www.discuz.in.th/thread/706/1/1/)

## วิธีการติดตั้ง

1. ดาวน์โหลดไฟล์ **dit_download_log_xxx.zip** และแตกไฟล์ zip ออกมา
2. อัปโหลดโฟลเดอร์ที่แตกออกมาไปยัง **/source/plugin/** ของ DISCUZ_ROOT (โฟลเดอร์หลักของ Discuz! X)
3. เข้าไปยัง **AdminCP** > **ปลั๊กอิน**
4. คลิกปุ่ม **ติดตั้ง** ข้างหลังปลั๊กอิน **DIT Download Log**
5. คลิกปุ่ม **ใช้งาน** ข้างหลังปลั๊กอิน **DIT Download Log**
6. เปิดไฟล์ **/forum/discuzcode.htm** ใน template ที่ใช้งานอยู่ปัจจุบัน
โดยหากใช้ template เริ่มต้นจะอยู่ที่ /template/discuz/forum/discuzcode.htm

> **หมายเหตุ:** กรณี template ที่ใช้ปัจจุบัน ไม่มีไฟล์ /forum/discuzcode.htm
สามารถคัดลอกไฟล์  /forum/discuzcode.htm มาใส่ในโฟลเดอร์ template ปัจจุบัน แล้วค่อยนำไปแก้ไขได้

7. ค้นหาโค้ดดังต่อไปนี้ (Ctrl+F)

`{lang clicktodownload}`

แล้วเพิ่มโค้ดดังต่อไปนี้ในบรรทัดถัดไป

`<p><a href="plugin.php?id=dit_downloadlog&aid=$attach[aid]" onclick="showWindow('dit_downloadlog', this.href)" target="_blank">[ดูบันทึกการดาวน์โหลด]</a></p>`

8. ทำซ้ำ **ข้อ 7** อีกครั้ง กับโค้ดที่อยู่ข้างล่าง
9. เข้าไปยัง **AdminCP** > **เครื่องมือ** > **อัปเดตแคช** แล้วกดปุ่ม ตกลง เพื่ออัปเดตแคช
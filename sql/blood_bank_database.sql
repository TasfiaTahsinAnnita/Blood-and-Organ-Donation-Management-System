create database Blood_Organ_donation;
use Blood_Organ_donation;

/*blood donor er table*/
create table donor_details(
donor_id int auto_increment NOT NULL,
donor_name varchar(50) NOT NULL,
donor_number varchar(10) NOT NULL,
donor_mail varchar(50),
donor_age int(60) NOT NULL,
donor_gender varchar(10) NOT NULL,
donor_blood varchar(10) NOT NULL,
donor_address varchar(100) NOT NULL,
Primary key(donor_id)
);
/*admin er login details*/
create table admin_info(
admin_id int(10) NOT NULL UNIQUE AUTO_INCREMENT,
admin_name varchar(50) NOT NULL,
admin_username varchar(50) NOT NULL UNIQUE,
admin_password varchar(50) NOT NULL,
Primary key(admin_id)
);


insert into admin_info(admin_name,admin_username,admin_password)
values("Annita","annitatahsin",123);


create table blood(
blood_id int auto_increment Not Null,
blood_group varchar(10) NOT NULL,
primary key(blood_id)
);

insert into blood(blood_group)
values("B+"),("B-"),("A+"),("O+"),("O-"),("A-"),("AB+"),("AB-");


/*shb page er likha info gula store krbo*/
create table pages(
page_id int NOT NULL auto_increment UNIQUE,
page_name varchar(255) NOT NULL,
page_type varchar(255) NOT NULL,
page_data longtext NOT NULL
);
ALTER TABLE pages
MODIFY COLUMN page_type varchar(50) UNIQUE;

/*BO donation er contacts*/
create table contact_info(
contact_id int auto_increment Not Null,
contact_address varchar(100) NOT NULL,
contact_mail varchar(50) NOT NULL,
contact_phone varchar(100) NOT NULL,
primary key(contact_id)
);

insert into contact_info(contact_address,contact_mail,contact_phone)
values("East West University, Rampura, Dhaka","BOdonation@gmail.com","9992221134");



INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(1, 'Why Should I Become A Donor?', 'donor', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">
Becoming a blood or organ donor is a significant act of generosity and compassion that has profound benefits for both recipients and donors. Here are several compelling reasons why you should consider becoming a donor:<br>
 
 Blood Donation<br>

1. Saves Lives: Each blood donation can save up to three lives. Blood transfusions are critical for patients undergoing surgeries, cancer treatments, and trauma care.<br>
2. Supports Medical Treatments: Blood is essential for various medical treatments, including those for severe injuries, childbirth complications, anemia, and chronic illnesses.<br>
3. Community Benefit: By donating blood, you are contributing to the health and well-being of your community, ensuring that there is a ready supply of blood for emergencies.<br>
4. Health Benefits for Donors: Blood donation can help in reducing harmful iron levels in the body, potentially lowering the risk of heart disease. Regular donors also receive health screenings that can detect underlying health issues early.<br>
 
 Organ Donation<br>

1. Saves Multiple Lives: One organ donor can save up to eight lives through the donation of organs like the heart, liver, kidneys, lungs, pancreas, and intestines.<br>
2. Improves Quality of Life: Organ recipients often experience a significant improvement in their quality of life. For example, kidney transplants can free patients from dialysis, and heart transplants can extend and improve lives.<br>
3. Addresses Organ Shortage: There is a critical shortage of available organs for transplantation. By registering as an organ donor, you can help close this gap and reduce the waiting time for those in need.<br>
4. Legacy of Generosity: Organ donation creates a lasting legacy of kindness. It offers comfort to donor families, knowing that their loved ones organs have given others a second chance at life.<br>
.
.
 </span>'),
(2, 'About Us ', 'aboutus', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">A blood bank is a facility that collects, processes, tests, stores, and distributes blood and blood products for medical use, ensuring a safe and sufficient supply for patients undergoing surgeries, trauma care, and treatments for certain illnesses. An organ donation management system oversees the entire process of organ donation, from donor registration and compatibility matching to transplantation and follow-up care. This system streamlines administrative tasks, provides real-time updates, facilitates communication between hospitals and transplant teams, and maintains detailed records to ensure compliance with legal and ethical standards. By improving the efficiency, accuracy, and coordination of blood and organ donations, these systems significantly enhance patient outcomes and save more lives.</span>');



INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(3, 'The Need For Blood', 'needforblood', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">There are many reasons patients need blood. A common misunderstanding about blood usage is that accident victims are the patients who use the most blood. Actually, people needing the most blood include those:
1) Being treated for cancer<br>
2) Undergoing orthopedic surgeries<br>
3) Undergoing cardiovascular surgeries<br>
4) Being treated for inherited blood disorders</span>');

INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
(4, 'Blood Tips', 'bloodtips', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
1) You must be in good health. <br>
2) Hydrate and eat a healthy meal before your donation.<br>
3) You’re never too old to donate blood. <br>
4) Rest and relaxed.<br>
5) Don’t forget your FREE post-donation snack. 
</span>'),
(5, 'Who you could Help', 'whoyouhelp', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
Every 2 seconds, someone in the World needs blood. Donating blood can help:<br>

1) People who go through disasters or emergency situations.<br>
2) People who lose blood during major surgeries.<br>
3) People who have lost blood because of a gastrointestinal bleed.<br>
4) Women who have serious complications during pregnancy or childbirth.<br>
5) People with cancer or severe anemia sometimes caused by thalassemia or sickle cell disease.<br>
</span>'),
(6, 'Donor Benefits', 'donorbenefits', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
1. **Saving Lives**: One organ donor can save up to eight lives by donating organs such as the heart, lungs, liver, kidneys, pancreas, and intestines.<br>
2. **Enhancing Quality of Life**: Donated tissues such as corneas, skin, and bone can dramatically improve the quality of life for recipients by restoring vision, healing burn injuries, and repairing musculoskeletal issues.<br>
3. **Supporting Medical Research**: Organ and tissue donations can contribute to vital medical research, leading to advances in understanding and treating various diseases.<br>
4. **Alleviating Healthcare Costs**: Successful organ transplants can reduce long-term healthcare costs by eliminating the need for ongoing treatment for organ failure, such as dialysis for kidney failure.<br>
5. **Creating a Legacy**: Donors leave a lasting legacy, offering hope and a second chance at life to recipients and their families.<br>
6. **Promoting Community and Solidarity**: Organ donation fosters a sense of community and shared responsibility, as individuals contribute to the well-being of others in society.<br>
</span>'),
(7, 'Donation Process', 'donationprocess', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
If you are interested in donating an organ, first you have to fill out a form which will be verified via the hospital management and they will carry out a small investigation regarding your donation offer. If your donation is proven secure and valid then we will search for an appropriate patient and contact you when required.
</span>'),
(8, 'Eligibility Criteria', 'eligibilitycriteria', '<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
1. **Age**: Generally, donors can be of any age, though some organs have age restrictions.<br>
2. **Health**: Donors must be in good overall health, without chronic diseases or infections that could affect the donation.<br>
3. **Medical History**: Certain conditions like cancer, HIV, or active infections can disqualify donors.<br>
4. **Organ Function**: Organs must be functioning properly to be viable for transplant.<br>
5. **Consent**: Donors or their families must provide informed consent for organ donation.<br>

Specific criteria can vary based on local regulations and the type of donation (living or deceased).
</span>');
INSERT INTO pages (page_id, page_name, page_type, page_data) VALUES
('9','Blood Groups','bloodgroups','<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
  <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>

                  <li>A positive or A negative</li>
                  <li>B positive or B negative</li>
                  <li>O positive or O negative</li>
                  <li>AB positive or AB negative.</li>
                </ul>
                <p>Your blood group is determined by the genes you inherit from your parents.<br>
                  A healthy diet helps ensure a successful blood donation, and also makes you feel better!
                </p>

</span>'),
('10','Universal Donors And Recepients','universal','<span style="color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;">
  <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>

            For emergency transfusions, blood group type O negative blood is the variety of blood that has the lowest risk of causing serious reactions for most people who receive it. Because of this, it\'s sometimes called the universal blood donor type.

</span>');
    
/*total koyta query ase*/
create table contact_query(
query_id int auto_increment Not Null,
query_name varchar(100) NOT NULL,
query_mail varchar(120) NOT NULL,
query_number char(11) NOT NULL,
query_message longtext NOT NULL,
query_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
query_status int(11) DEFAULT NULL,
Primary key(query_id)
);    
alter table contact_query modify column query_date
timestamp DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP;


insert into contact_query (query_name,query_mail,query_number,query_message) values
("Jafa","Jafa@gmail.com","12345678910","I need eyes.");

update contact_query set query_status="1" where query_id="1";
  
/*organ donor er table*/
CREATE TABLE organ_donations (
    donation_id INT AUTO_INCREMENT NOT NULL,
    donor_name VARCHAR(50) NOT NULL,
    donor_blood_group VARCHAR(10) NOT NULL,
    donatable_organ VARCHAR(255) NOT NULL,
    donation_reason VARCHAR(255) NOT NULL,
    contact_number VARCHAR(10) NOT NULL,
    donor_address VARCHAR(100) NOT NULL,
    amount_demanded DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY(donation_id)
);

INSERT INTO organ_donations (donor_name, donor_blood_group, donatable_organ, donation_reason, contact_number, donor_address, amount_demanded)
VALUES ('Samura', 'B+','Kidney', 'For Family', '1234567890', 'Jatrabari', 50000.00);

SELECT query_name, query_mail, query_number, query_message
FROM contact_query
WHERE query_status IS NULL OR query_status = 2;

/*read hoile delete koira dibo*/
DELETE FROM contact_query WHERE query_status IS NULL OR query_status = 2;

# Система онлайн-сервисной службы

1) Для реализации системы необходимо инициализировать следующие сущности: 
    - Customer (регистрация клиента, просмотр и редактирование профиля, и.т.п.)
    - Device (регистрация аппарата, просмотр списка аппаратов, просмотр детальной инф., и.т.п.)
    - RepairService (оформление запроса на ремонт, просмотр списка, детальная инф. о запросе, и.т.п.)
    - SupportService (оформление запроса на тех.обслуживание, просмотр списка, детальная инф. о запросе, и.т.п.)
    - Order (создание наряда на выезд инженера, спросмотр списка, просмотр детальной инф., и.т.п.)
    - NotificationService (сущность по работе с уведомлениями клиентам)
2) В проекте реализована API для сущности по работе с запросами клиентов на тех.обслуживание - 
   SupportService. Предусмотрена аутентификация API через Bearer Token.
   Подробное описание API смотри swagger.yaml. 
3) Логическая схема БД.

   ![image] (https://github.com/Yashkov-DM/Customer_Service/blob/master/schema_bd.jpeg)
   ![image] (schema_bd.jpeg)


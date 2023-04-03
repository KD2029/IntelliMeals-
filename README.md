# IntelliMeals-
Here is the work for the Final Year Project.ie the Diet and Nutrition Management system

#This is the message for the previous commmit staged on 01/04/2023-
i changed the function names and added their respective doc-block comments.
i moved the styling for all the views to the public/css folder.
I edited the name columns for both food_categories and food_options to category and part respectively.
I changed their column data types to JSON to store the encoded json strings.
I removed the unique_constraint for the api_name column in the foods table to cater for the scenario where the entered ingredient name and api_name might be the same.
I also increased the counter of the migration tables for food_categories and food_options.
 
# Schistosomiasis Prediction App V.1.0.0
At this stage, the application front end have been developed whcih includes the SignUp Page, Login Page and Data Entry page.
The backend: MySQL Database and Flask will be integrated also 

# PSAC Korede Analysis and Model
This analysis is basically the output of my masters degree programme shich investigated schistosomiasis among preschool and school age children in Korede Community.
The Model built in PSAC Korede Analysis and Model component of this repo comprise of Decision Tree Regression and Linear Regression Models respectively. 
# Model Parameters
This model compares the prevalence/presence of Schistosoma haematobium eggs alongside morbidity assesment parameters like:
Proteinuria
Haematuria 
Leukocyturia 
Glucosuria and their respective contribution to schistosomaisis related morbidity.

## Schistosoma Analysis**

**Project Overview**

This Python script analyzes a dataset from the Koredepsac study to investigate the relationship between Schistosoma egg counts and various factors, including biometric data and qualitative variables. 

**Data:**

* **psacquant.csv:** Contains quantitative data such as age, height, and Schistosoma egg counts.
* **psacqual (1).csv:** Contains qualitative data like sex, exposure source, and Schistosoma intensity level.

**Dependencies:**

* pandas
* numpy
* matplotlib.pyplot
* scikit-learn
* graphviz

**Data Preprocessing:**

1. **Load Data:**
   - Reads the CSV files using `pandas.read_csv`.

2. **Handle Missing Values:**
   - Identifies missing values using `df.isnull().sum()`.
   - Handles missing values appropriately (e.g., imputation, removal).

3. **Feature Engineering:**
   - Extracts relevant features from the datasets.
   - Creates new features if necessary (e.g., combining variables, calculating ratios).

4. **Data Splitting:**
   - Splits the data into training and testing sets using `train_test_split`.

**Model Building and Evaluation:**

1. **Decision Tree Regression:**
   - Trains a Decision Tree Regressor to predict Schistosoma egg count based on biometric data.
   - Evaluates the model's performance using metrics like R-squared and mean squared error.
   - Visualizes the decision tree using `graphviz` for interpretability.

2. **Support Vector Regression (SVR):**
   - Trains an SVR model to predict egg count.
   - Evaluates the model's performance.

3. **Other Models (Optional):**
   - Explore other regression models like Random Forest, Gradient Boosting, or Neural Networks.

**Qualitative Data Analysis:**

1. **Label Encoding:**
   - Encodes categorical features (e.g., sex, exposure source) using `LabelEncoder`.
2. **One-Hot Encoding:**
   - Converts categorical features into numerical representations using `OneHotEncoder`.
3. **Correlation Analysis:**
   - Calculates correlation coefficients between qualitative variables and Schistosoma intensity.

**Model Improvement:**

1. **Hyperparameter Tuning:**
   - Optimize model performance by tuning hyperparameters using techniques like Grid Search or Randomized Search.
2. **Feature Selection:**
   - Identify the most important features to improve model accuracy and reduce overfitting.
3. **Regularization:**
   - Apply regularization techniques (e.g., L1, L2 regularization) to prevent overfitting.

**Visualization:**

- Create visualizations (e.g., scatter plots, histograms, box plots) to explore data distributions and relationships.
- Visualize the decision tree to understand the model's decision-making process.

**Specific Code Improvements:**

- **Error Handling:** Implement error handling to gracefully handle exceptions.
- **Data Cleaning:** Address missing values and outliers.
- **Feature Engineering:** Create informative features that capture relevant relationships.
- **Model Selection:** Evaluate multiple models and choose the best-performing one.
- **Hyperparameter Tuning:** Experiment with different hyperparameters to optimize model performance.
- **Visualization:** Use clear and informative visualizations to communicate insights.
